import $ from 'jquery';

const initProfitCalculator = () => {

    $(document).ready(function() {

        $(".main-content").show();
        $(".second-content").hide();

        $("#person-switcher").change(function () {
            if ($(this).is(":checked")) {
                $(".second-content").show();
                $(".main-content").hide();
            } else {
                $(".second-content").hide();
                $(".main-content").show();
            }
        });

        let $estimatedCost = $('#estimated-cost');
        let $result = parseInt($estimatedCost.html());
        let $levelOfCare = 0;
        let $languageSkills = 0;
        let $driversLicense = 0;

        $("#level-of-care input:radio").change(function () {
            if ($(this).is(":checked")) {
                $('#level-of-care-result').html(parseInt($(this).val()));
                $levelOfCare = parseInt($(this).val());
            }
            calculate();
        });

        $("#language-skills input:radio").change(function () {
            if ($(this).is(":checked")) {
                $('#language-skills-result').html(parseInt($(this).val()));
                $languageSkills = parseInt($(this).val());
            }
            calculate();
        });

        $("#drivers-license").change(function () {
            if ($(this).is(":checked")) {
                $driversLicense += 50;
            } else {
                $driversLicense += 0;
            }
            calculate();
        });

        function calculate() {
            $estimatedCost.html($result + $levelOfCare + $languageSkills + $driversLicense);
        }
    });
};

export { initProfitCalculator };




async function fetchData() {
    await fetch('https://swapi.dev/api/people')
        .then(response => {
            return response.json();
        }).then(data => {
            for (var i = 0; i < data.length; i++) {
                document.getElementById('#app').innerHTML += '<div>' + data[i].name + '</div>';
        }
    })
}

