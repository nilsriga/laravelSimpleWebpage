@extends('masterRCS')

@section('title', 'Calculator')

@section('content')

@include('galaDarbsRCS/breadcrumbs')

<style>
    @media only screen and (min-width: 993px) {
        .container {
        width: 30%;
        }
    }
    @media only screen and (min-width: 580px) {
        .container {
        width: 40%;
        }
    }
    #calculator {
        padding: 5px;
    }
    .row {
        padding: 5px;
        margin-bottom: 0px;
    }
    .container {
        width: 40%;
    }
</style>


<div class="center-align animated-container">
        <h5>VueJS</h5>
    <div class="row center-align" id="calculator">
            <div id="display" class="container" contenteditable="true" class="white p-1 m-1 shadow inner">@{{current || '0'}}</div>     
        <div class="row col-12">
            <div  v-on:click="clear" class="col-4 red waves-effect waves-light btn">AC</div>
            <div  v-on:click="action('+')" class="col-4 red waves-effect waves-light btn">+</div>
            <div  v-on:click="action('-')" class="col-4 red waves-effect waves-light btn">-</div>
        </div>
        <div class="row col-12">
            <div  v-on:click="clearLast" class="col-4 red waves-effect waves-light btn">C</div>
            <div  v-on:click="action('*')" class="col-4 red waves-effect waves-light btn">X</div>
            <div  v-on:click="action('/')" class="col-4 red waves-effect waves-light btn">:</div>
        </div>
        <div class="row col-12">
            <div  v-on:click="addNumber(7)" class="col-4 red waves-effect waves-light btn">7</div>
            <div  v-on:click="addNumber(8)" class="col-4 red waves-effect waves-light btn">8</div>
            <div  v-on:click="addNumber(9)" class="col-4 red waves-effect waves-light btn">9</div>
        </div>
        <div class="row col-12">
            <div  v-on:click="addNumber(4)" class="col-4 red waves-effect waves-light btn">4</div>
            <div  v-on:click="addNumber(5)" class="col-4 red waves-effect waves-light btn">5</div>
            <div  v-on:click="addNumber(6)" class="col-4 red waves-effect waves-light btn">6</div>
        </div>
        <div class="row col-12">
            <div  v-on:click="addNumber(1)" class="col-4 red waves-effect waves-light btn">1</div>
            <div  v-on:click="addNumber(2)" class="col-4 red waves-effect waves-light btn">2</div>
            <div  v-on:click="addNumber(3)" class="col-4 red waves-effect waves-light btn">3</div>
        </div>
        <div class="row col-12">
            <div  v-on:click="addNumber(0)" class="col-4 red waves-effect waves-light btn">0</div>
            <div  v-on:click="addDot" class="col-4 red waves-effect waves-light btn">.</div>
            <div  v-on:click="result" class="col-4 red waves-effect waves-light btn">=</div>
        </div>
    </div>
</div>

@endsection


@section('calculatorScript')
<script>
var b = new Vue({
    el: "#calculator",
    data: {
        current: "",
        actionSymbol: "",
        number1: 0,
        number2: 0,
    },
    methods: {
        clear: function () {
            this.current = "";
            this.number1 = 0;
            this.number2 = 0;
            this.actionSymbol = "";
        },
        clearLast: function () {
            try {
                this.current = this.current.toString().slice(0, this.current.length - 1);
            } catch (err) {
                this.current = "";
                this.number1 = 0;
                this.number2 = 0;
                this.actionSymbol = "";
            }
        },
        addNumber: function (number) {
            if (this.actionSymbol != "") {
                var str = this.current.toString().concat(number.toString());
                this.current = str;
            } else {
                this.current += number;
            }

            console.log( number, this.current, this.number1, this.number2, this.actionSymbol)
        },
        addDot: function () {
            this.current.includes(".") ? null : this.current == "" ? this.current += "0." : this.current += ".";
        },
        action: function (action) {
            console.log(action, this.current, this.number1, this.number2, this.actionSymbol)
            if (this.actionSymbol == "") {
                this.number1 = this.current;
                this.current = "";
                this.actionSymbol = action;
            }
            //  else if (this.actionSybmol != "" && this.number1 != 0) {
                
            // }
             else if (this.actionSymbol != "") {
                 // šeit vajag vēl vienu if. ja simbola nav bet ir skaitlis, tad viņu nevajag pārlikt par pirmo skaitli. kkā tā. 
                this.number2 = this.current;
                this.current = eval(this.number1 + this.actionSymbol + this.number2);
                this.number1 = this.current;
                // this.number2 = 0;
                this.actionSymbol = "";
                // this.current = "";
                console.log(action, this.current, this.number1, this.number2, this.actionSymbol)
                
            }

        },
        result: function () {
            console.log(this.current, this.number1, this.number2, this.actionSymbol)
            if (this.actionSymbol != "") {
                this.number2 = this.current;
                this.current = eval(this.number1 + this.actionSymbol + this.number2);
                this.actionSymbol = "";
                this.number1 = this.current;
                this.number2 = 0;
            } else {
                this.current = this.number1
                this.number1 = 0;
            }
        }
    }
})
</script>
@endsection