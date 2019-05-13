@extends('masterRCS')

@section('title', 'Clicker')

@section('content')

@include('galaDarbsRCS/breadcrumbs')

<div class="container animated-container">
        <h5>VueJs</h5>
    <div class="row">
        <div id="clicker-box" class="col-4 offset-3 red lighten-2">
            <div><h4>Earned Coins:</h4><h5>@{{totalCoins}}</h5></div>
            <div><h6>Avaliable for spending:</h6><p>@{{expendableCoins}}</p></div>
            <button class="btn-floating btn-large waves-effect waves-light red" v-on:click="addClick">Click</button>
            <div><p><u>Upgrades:</u></p></div>
            <div>x1 upgrades:</div>
            <span>@{{x1upgradeCount}}</span>
            <span>Current price:</span>
            <span>@{{x1upgradePrice}}</span>
            <button class="btn" v-on:click="addx1Upgrade" v-bind:disabled="expendableCoins < x1upgradePrice">Get x1 upgrade</button>
            <div>x10 upgrades:</div>
            <span>@{{x10upgradeCount}}</span>
            <span>Current price:</span>
            <span>@{{x10upgradePrice}}</span>
            <button class="btn" v-on:click="addx10Upgrade" v-bind:disabled="expendableCoins < x10upgradePrice">Get x10 upgrade</button>
        </div>
    </div>
</div>
    

@endsection


@section('clickerScript')
<script>
var a = new Vue({
    el: "#clicker-box",
    data: {
        totalCoins: 0,
        expendableCoins: 0,
        x1upgradeCount: 0,
        x1upgradePrice: 10,
        x10upgradeCount: 0,
        x10upgradePrice: 90,
        countSpeed: 700,
    },
    methods: {
        addClick: function () {
            this.totalCoins += 1;
            this.expendableCoins += 1;
        },
        addx1Upgrade: function () {
            this.x1upgradeCount += 1;
            this.expendableCoins -= this.x1upgradePrice;
            this.x1upgradePrice = Math.round(this.x1upgradePrice * 1.1);
            setInterval(function () {
                    this.addClick();
                }.bind(this), // ja kkas nestrādā, tad šito vajag izdzēst. tas piebaindo this tam objektam. un vajag a.addClick();
                this.countSpeed
            );
        },
        addx10Upgrade: function () {
            this.x10upgradeCount += 1;
            this.expendableCoins -= this.x10upgradePrice;
            this.x10upgradePrice = Math.round(this.x10upgradePrice * 1.1);
            setInterval(function () {
                    a.addClick();
                },
                this.countSpeed*0.5
            );
        },
    }
})
</script>
@endsection