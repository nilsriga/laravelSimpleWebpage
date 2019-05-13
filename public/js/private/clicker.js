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