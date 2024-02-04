// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "What is the output of 'list(set([1,2,3,1,2]))'?",
        answer: "[1, 2, 3]",
        options: [
            "[1, 2, 3]",
            "[1, 2, 3, 1, 2]",
            "[2, 3, 1]",
            "Error"
        ]
    },
    {
        numb: 2,
        question: "What is the correct way to declare a function that takes an unlimited number of arguments?",
        answer: "def myFunc(*args):",
        options: [
            "def myFunc(**args):",
            "def myFunc(*args):",
            "def myFunc(args*):",
            "def myFunc(#args):"
        ]
    },
    {
        numb: 3,
        question: "How can you access the value of the key 'age' in a dictionary named 'person'?",
        answer: "person['age']",
        options: [
            "person.age",
            "person[age]",
            "person->age",
            "person['age']"
        ]
    },
    {
        numb: 4,
        question: "What is the output of 'bool(0)'?",
        answer: "False",
        options: [
            "True",
            "False",
            "0",
            "None"
        ]
    },
    {
        numb: 5,
        question: "Which of the following will create a list?",
        answer: "x = list((1, 2, 3))",
        options: [
            "x = list(1, 2, 3)",
            "x = list[1, 2, 3]",
            "x = list((1, 2, 3))",
            "x = [1, 2, 3]"
        ]
    },
    {
        numb: 6,
        question: "What does the 'yield' keyword do in Python?",
        answer: "It is used to create a generator",
        options: [
            "It pauses a loop",
            "It exits a function",
            "It is used to create a generator",
            "It skips the current iteration"
        ]
    },
    {
        numb: 7,
        question: "What is a correct syntax to return the first character in a string?",
        answer: "x[0]",
        options: [
            "x[1]",
            "x[0]",
            "x.first()",
            "x.charAt(0)"
        ]
    },
    {
        numb: 8,
        question: "What is the correct way to write a lambda function that squares its argument?",
        answer: "lambda x: x**2",
        options: [
            "lambda x: x**2",
            "lambda x: x*x",
            "x => x*x",
            "function(x) { return x*x }"
        ]
    },
    {
        numb: 9,
        question: "What is the output of 'print(2 ** 3)'?",
        answer: "8",
        options: [
            "6",
            "9",
            "8",
            "5"
        ]
    },
    {
        numb: 10,
        question: "Which method is used to convert a string into a list in Python?",
        answer: "split()",
        options: [
            "split()",
            "list()",
            "convert()",
            "strToList()"
        ]
    }

];