// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "What is the output of 'print(list(map(lambda x: x**2, filter(lambda x: x%2 == 0, range(10)))))'?",
        answer: "[0, 4, 16, 36, 64]",
        options: [
            "[1, 3, 5, 7, 9]",
            "[0, 4, 16, 36, 64]",
            "[1, 4, 9, 16, 25]",
            "[0, 1, 2, 3, 4, 5, 6, 7, 8, 9]"
        ]
    },
    {
        numb: 2,
        question: "What is the purpose of the 'with' statement in Python?",
        answer: "To ensure that clean-up code is executed (such as closing a file)",
        options: [
            "To simplify exception handling",
            "To create a new scope",
            "To ensure that clean-up code is executed (such as closing a file)",
            "To handle conditional statements"
        ]
    },
    {
        numb: 3,
        question: "What does the 'yield' keyword do in Python?",
        answer: "It is used to turn a function into a generator",
        options: [
            "It stops the function execution temporarily and returns a value",
            "It is used to turn a function into a generator",
            "It yields control to another function",
            "It is a shorthand for return and continue"
        ]
    },
    {
        numb: 4,
        question: "What is the output of 'print(next((x for x in range(50) if x%8==0), 'No Match'))'?",
        answer: "0",
        options: [
            "0",
            "8",
            "'No Match'",
            "Error"
        ]
    },
    {
        numb: 5,
        question: "What is 'List Comprehension' in Python?",
        answer: "A concise way to create lists",
        options: [
            "A method to append items to a list",
            "A way to iterate through lists",
            "A function to sort lists",
            "A concise way to create lists"
        ]
    },
    {
        numb: 6,
        question: "What is the output of 'print({i: i*i for i in range(6)})'?",
        answer: "{0: 0, 1: 1, 2: 4, 3: 9, 4: 16, 5: 25}",
        options: [
            "[0, 1, 4, 9, 16, 25]",
            "{0: 0, 1: 1, 2: 4, 3: 9, 4: 16, 5: 25}",
            "{1, 4, 9, 16, 25}",
            "Error"
        ]
    },
    {
        numb: 7,
        question: "In Python, what is slicing?",
        answer: "A method to extract parts of a sequence type (like strings, lists, tuples)",
        options: [
            "A method to iterate over a sequence",
            "A method to modify elements of a sequence",
            "A method to extract parts of a sequence type (like strings, lists, tuples)",
            "A way to merge two sequences"
        ]
    },
    {
        numb: 8,
        question: "What is the purpose of a decorator in Python?",
        answer: "A way to modify the behavior of a function or class",
        options: [
            "To simplify complex functions",
            "To declare static methods",
            "A way to modify the behavior of a function or class",
            "To handle exceptions within functions"
        ]
    },
    {
        numb: 9,
        question: "What is the output of 'print(2 == 2.0 and '2' == '2.0')'?",
        answer: "False",
        options: [
            "True",
            "False",
            "Syntax Error",
            "None"
        ]
    },
    {
        numb: 10,
        question: "What is the output of 'print([x*y for x in [1,2,3] for y in [1, 11, 111]]'?",
        answer: "[1, 11, 111, 2, 22, 222, 3, 33, 333]",
        options: [
            "[1, 2, 3, 11, 22, 33, 111, 222, 333]",
            "[1, 11, 111, 2, 22, 222, 3, 33, 333]",
            "[1, 2, 3, 22, 44, 66, 333, 666, 999]",
            "Error"
        ]
    }

];