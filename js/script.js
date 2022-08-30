document.addEventListener('DOMContentLoaded', function () {
/*
    const quizQuestions = [
        {
            category: "myself",
            question: "Was machst Du in Deiner Freizeit?",
            choices: [
                {
                    answer: "Programmieren",
                    state: true
                },
                {
                    answer: "Fluggeräte bauen",
                    state: true
                },
                {
                    answer: "die Buchführung",
                    state: false
                },
                {
                    answer: "Bogenschießen",
                    state: true
                },
            ]
        },
        {
            category: "my daughter",
            question: "Was sind deine Hobbys!",
            choices: [
                {
                    answer: "Lesen",
                    state: true
                },
                {
                    answer: "Kochen",
                    state: false
                },
                {
                    answer: "Anime schauen",
                    state: true
                },
                {
                    answer: "Tanzen",
                    state: false
                },
            ]
        }
    ];
*/


    let quizQuestions = [];
    const answersGiven = [];

    let currentQuestion = 0;
    let correctAnswers = 0;
    let incorrectAnswers = 0;

    (async () => {
        let response = await fetch("https://wolfgang-siebert.developerakademie.net/quiz-app/quiz-api.php?topic=scrum");
        quizQuestions = await response.json();
        showCurrentQuestion();
    })();


    function showCurrentQuestion() {
        document.getElementById("question").innerText = quizQuestions[currentQuestion].question;
        showAnswersChoices();
        showQuizProgress();
        setupSubmitButton();
    }


    function showAnswersChoices() {
        const answers = getEmptyAnswersChoices();
        quizQuestions[currentQuestion].choices.forEach((choice, index) => {
            const answerCard = setupAnswersChoice(choice, index);
            answers.appendChild(answerCard);
        });
    }


    function getEmptyAnswersChoices() {
        let answers = document.getElementById("answers");
        answers.innerHTML = "";
        answersGiven.splice(0, answersGiven.length);
        return answers; 
    }


    function setupAnswersChoice(choice, index) {
        const answerCard = document.createElement("div");
        answerCard.classList.add("card", "answer", "mb-2");
        answerCard.id = "a" + index;
        const answerBody = document.createElement("div");
        answerBody.classList.add("card-body");
        answerBody.innerText = choice.answer;
        answerCard.appendChild(answerBody);
        answerCard.addEventListener('click', answerClicked);
        answersGiven.push({state: false});
        return answerCard;
    }


    function showQuizProgress() {
        document.getElementById("current-question").innerText = currentQuestion + 1;
        document.getElementById("number-of-questions").innerText = quizQuestions.length;
    }


    function resetQuiz() {
        currentQuestion = 0;
        correctAnswers = 0;
        incorrectAnswers = 0;
        document.querySelector(".card-img-top").src="img/brainstorm-nerdy-girl.webp";
        document.getElementById("processed-questions").classList.remove("d-none");
    }


    function setupSubmitButton() {
        const submitAnswer = document.getElementById("submit-answer");
        submitAnswer.innerText = "prüfen";
        submitAnswer.classList.add("check");
        submitAnswer.classList.remove("next");
        submitAnswer.classList.remove("restart");
        submitAnswer.addEventListener('click', submitButtonClicked);
    }


    function answerClicked(e) {
        let currentAnswer = this.id.slice(1);
        answersGiven[currentAnswer].state = !answersGiven[currentAnswer].state;
        answersGiven[currentAnswer].state ? this.style = "background-color: #a5dfdf;" : this.style = "";
        //let stateOfAnswer = quizQuestions[currentQuestion].choices[currentAnswer].state;
        //let currentAnswer= e.currentTarget.id.slice(1);
    }


    function submitButtonClicked(e) {
        switch (getSubmitButtonState(this)) {
            case "check":
                disableAnswerCards();
                checkCurrentAnswers() ? correctAnswers++ : incorrectAnswers++;
                toggleSubmitButtonState(this);
                break;
            case "next":
                currentQuestion++;
                showCurrentQuestion();
                break;
            case "restart":
                resetQuiz();
                showCurrentQuestion();
                break;
            case "last":
                showEndScreen();
         }
    }


    function getSubmitButtonState(t) {
        if (t.classList.contains("check")) {
            return "check";
        }
        if (t.classList.contains("restart")) {
            return "restart";
        }
        if (currentQuestion < quizQuestions.length - 1) {
            return "next";
        }
        return "last";
    }
    

    function toggleSubmitButtonState(t) {
        t.classList.toggle("check");
        t.classList.toggle("next");
        currentQuestion < quizQuestions.length - 1 ? t.innerText = "weiter" : t.innerText = "Ergebnis"; 
    }


    function disableAnswerCards() {
        for (let i = 0; i < quizQuestions[currentQuestion].choices.length; i++) {
            const answerCard = document.getElementById("a" + i);
            answerCard.classList.remove("answer");
            answerCard.removeEventListener('click', answerClicked);
        };
    }


    function checkCurrentAnswers() {
        let result = true;
        quizQuestions[currentQuestion].choices.forEach((choice,index) => {
            let answer = document.getElementById("a" + index);
            choice.state ? answer.style.color = "green" : answer.style.color += "red";
            if (answersGiven[index].state != choice.state) {
                result = false
            }
        });
        return result;
    }


    function showEndScreen() {
        document.querySelector(".card-img-top").src="img/discuss-result.jpg";
        document.getElementById("submit-answer").innerText = "noch einmal";
        document.getElementById("submit-answer").classList.add("restart");
        document.getElementById("processed-questions").classList.add("d-none");
        const answers = document.getElementById("answers");
        const question = document.getElementById("question");
        question.innerHTML = "Du hast <b>" + correctAnswers + "</b> von <b>" + quizQuestions.length + "</b> Fragen richtig beantwortet.";
        answers.innerHTML = "";
        return;
    }


});
