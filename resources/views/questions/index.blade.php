@extends('layouts.app')

@section('content')
    <body>
    <div class="app_container">
        <div class="app_segment">
            <h1 class="question">Wat lijkt jou het mooiste aan het leven op zee?</h1>
        </div>
        <div class="progress_bar_red">
            <span class="progress_bar_value"></span>
        </div>

        <ul class="answer_list">
            <li class="answer answer_1" data-value="1">Het avontuur</li>
            <li class="answer answer_2" data-value="2">De zonsondergang</li>
            <li class="answer answer_3" data-value="3">A pirate life for me!</li>
            <li class="answer answer_4" data-value="4">Naar mijn dobber staren</li>
           {{-- <span class="next"><img class="arrow" src="css/img/Pijltje-04.png"></span>--}}
        </ul>

    </div>

    <script>

        /*main variables*/
        var answer_list = $('.answer_list');
        var question = $('.question');
       /* var next_button = answer_list.find('.next');*/

        var cur_value = 0;
        var cur_question = 0;
        var max_question = 0;
        var new_question_string = '';
        var question_object;

        /*initalize question game*/
        init();


        /*make sure answers are always clickable*/
        function find_answers() {
            answer_list.find('.answer').click(function () {

                answer_list.find('.answer').removeClass('active');
                $(this).addClass('active');
                console.log('item is clicked');
                selectQuestion();
            });
        }

        /*initialize function*/
        function init() {
            getQuestions();

            /*set first content*/
            var next_questions = question_object[cur_question];

            /*set question text*/
            question.text(next_questions['vraag']);

            var first_answers = shuffle(next_questions['antwoorden']);


            console.log(first_answers);
            answer_list.find('.answer').remove();

            for (i = 0; i < first_answers.length; i++) {
                answer_list.prepend(
                        $("<li>").addClass('answer').text(first_answers[i].answer).attr('data-value', first_answers[i].value)
                );
            }

            /*make click functionality work*/
            find_answers();
            adjustProgressBar();
        }

        /*go to the next question*/
        function next_question() {
            var cur_active_answer = $('.answer.active');

            var value = cur_active_answer.attr('data-value');
            cur_value = cur_value + parseInt(value);

            console.log("new value = " + cur_value);

            /*go to next question*/
            cur_question++;

            /*reset active question*/
            answer_list.find('.answer').removeClass('active');

            var next_questions = shuffle(question_object[cur_question]);

            /*set new questions*/
            question.text(next_questions['vraag']);

            var next_answers = shuffle(next_questions['antwoorden']);
            console.log(next_answers);
            /*clear old answers*/
            answer_list.find('.answer').remove();

            /*loop trough answers and prepend new ones*/
            for (i = 0; i < next_answers.length; i++) {
                answer_list.prepend(
                        $("<li>").addClass('answer').text(next_answers[i].answer).attr('data-value', next_answers[i].value)
                );
            }

            find_answers();
            adjustProgressBar();
            scrollToTop();
        }
        function shuffle(array) {
            var counter = array.length;

            // While there are elements in the array
            while (counter > 0) {
                // Pick a random index
                var index = Math.floor(Math.random() * counter);

                // Decrease counter by 1
                counter--;

                // And swap the last element with it
                var temp = array[counter];
                array[counter] = array[index];
                array[index] = temp;
            }

            return array;
        }
        /*question list is completed*/
        function finish() {

            var cur_active_answer = $('.answer.active');
            var value = cur_active_answer.attr('data-value');
            cur_value = cur_value + parseInt(value);

            /*go to next zeebonk screen*/
            console.log('go to next screen!!!');
            console.log('zeebonk waarde = ' + cur_value);

            /*get with param values*/
            /* location.href = 'scherm3.html';*/
            location.href = "{{url('/result/')}}" + "/" + cur_value;
        }

        /*do get request to server*/
        function getQuestions() {
            new_question_string = {!! $questions !!};
            console.log(new_question_string);
            question_object = shuffle(new_question_string);
            max_question = question_object.length;
            console.log(max_question);
        }

        /*sets progressbar*/
        function adjustProgressBar() {
            console.log(cur_question);

            var progress_element = $('.progress_bar_value');

            var cur_question_value;

            /*console.log("cur question =" + cur_question);
             console.log("max questions = " + max_question);*/

            if (cur_question == 0) {
                cur_question_value = 1;
            }
            else {
                cur_question_value = cur_question + 1;
            }

            var progress = ( cur_question_value / max_question ) * 100;

            progress_element.width(progress + '%');
            console.log("cur progress = " + progress);
        }


       /* /!*handels click action*!/
        next_button.click(function (e) {
            /!*check if item is selected*!/
            var cur_active_question = answer_list.find('.answer.active');
            console.log(cur_active_question.length == 0);
            if (cur_active_question.length == 0) {
                alert("U heeft niks ingevuld!");
            }
            else {
                if ((cur_question + 1) == max_question) {
                    finish();
                }
                else {
                    next_question();
                }
            }

        });*/

        function selectQuestion(){
            /*check if item is selected*/
            var cur_active_question = answer_list.find('.answer.active');
            console.log(cur_active_question.length == 0);
            if (cur_active_question.length == 0) {
                alert("U heeft niks ingevuld!");
            }
            else {
                if ((cur_question + 1) == max_question) {
                    finish();
                }
                else {
                    next_question();
                }
            }

        }

        function scrollToTop(){
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
        }

    </script>
    </body>
@endsection