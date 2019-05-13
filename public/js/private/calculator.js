new Vue({
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


// var a = $('#inOut').text();

// var a = new Vue({
//     el: '#display',
//     data: {
//         current: 'sdf'
//     },
//     methods: {
//         clear: function() {
//             this.current = ''
//         }
//     }
// })

// this.clear();

// new Vue({
//     methods: {
//       handleClick() {
//         alert('test');
//       }
//     }
//   })
// handleClick();

// new Vue({
//     el: "#app",
//     data: {
//         todos: [{
//                 title: 'buy milk',
//                 completed: false,
//             },
//             {
//                 title: 'buy eggs',
//                 completed: true,
//             },
//             {
//                 title: 'learn vue',
//                 completed: true,
//             },
//             {
//                 title: 'speed meed',
//                 completed: false,
//             },
//         ],
//         newElement: {
//             title: '',
//             completed: false,
//         }
//     },
//     methods: {
//         deleteItem: function(item) {
//             var index = this.todos.indexOf(item);
//             this.todos.splice(index, 1);
//         },
//         addItem: function() {
//             this.todos.push({
//                 title: this.newElement.title,
//                 completed: false
//             })
//             this.todos.push(this.newElement);
//             this.newElement.title = '';
//         }
//     }
// });
