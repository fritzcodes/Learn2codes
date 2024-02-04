// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "Which function can be used to get the ASCII value of a character?",
        answer: "ord()",
        options: [
            "ascii()",
            "char()",
            "ord()",
            "str()"
        ]
    },
    {
        numb: 2,
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
        numb: 3,
        question: "What does the 'continue' statement do in a loop?",
        answer: "Skips the rest of the code inside a loop for the current iteration",
        options: [
            "Terminates the loop",
            "Skips the rest of the code inside a loop for the current iteration",
            "Pauses the loop",
            "Continues execution outside the loop"
        ]
    },
    {
        numb: 4,
        question: "How do you catch exceptions in Python?",
        answer: "Using a try-except block",
        options: [
            "Using a do-catch block",
            "Using a try-except block",
            "Using a try-catch block",
            "Using a catch block"
        ]
    },
    {
        numb: 5,
        question: "What is the output of '2 == \"2\"'?",
        answer: "False",
        options: [
            "True",
            "False",
            "Error",
            "None"
        ]
    },
    {
        numb: 6,
        question: "Which of the following will create a set in Python?",
        answer: "set([1, 2, 3])",
        options: [
            "{1, 2, 3}",
            "[1, 2, 3]",
            "(1, 2, 3)",
            "set([1, 2, 3])"
        ]
    },
    {
        numb: 7,
        question: "What is the output of 'list(range(5))'?",
        answer: "[0, 1, 2, 3, 4]",
        options: [
            "[1, 2, 3, 4, 5]",
            "[0, 1, 2, 3, 4, 5]",
            "[0, 1, 2, 3, 4]",
            "Error"
        ]
    },
    {
        numb: 8,
        question: "What is slicing in Python?",
        answer: "A way to get a subset of items from a sequence",
        options: [
            "A way to delete items from a list",
            "A way to add items to a list",
            "A method to sort a list",
            "A way to get a subset of items from a sequence"
        ]
    },
    {
        numb: 9,
        question: "Which operator is used for floor division?",
        answer: "//",
        options: [
            "%",
            "**",
            "//",
            "/"
        ]
    },
    {
        numb: 10,
        question: "What will 'round(3.14159, 2)' return?",
        answer: "3.14",
        options: [
            "3.1",
            "3.14",
            "3",
            "3.1416"
        ]
    },
    {
        numb: 11,
        question: "How do you create a complex number in Python?",
        answer: "Using the 'complex(real, imag)' function",
        options: [
            "Using the 'complex(real, imag)' function",
            "By adding 'j' or 'J' after a number",
            "Both 'Using the 'complex(real, imag)' function' and 'By adding 'j' or 'J' after a number'",
            "Using the 'comp()' function"
        ]
    },
    {
        numb: 12,
        question: "Which keyword is used to define a function in Python?",
        answer: "def",
        options: [
            "func",
            "def",
            "function",
            "lambda"
        ]
    },
    {
        numb: 13,
        question: "What is the correct syntax for defining a class named 'MyClass'?",
        answer: "class MyClass:",
        options: [
            "class MyClass:",
            "define MyClass:",
            "MyClass class:",
            "new MyClass:"
        ]
    },
    {
        numb: 14,
        question: "What will be the output of 'print(\"Hello\" * 3)'?",
        answer: "HelloHelloHello",
        options: [
            "HelloHelloHello",
            "Hello3",
            "Error",
            "Hello * 3"
        ]
    },
    {
        numb: 15,
        question: "What is the purpose of the 'pass' statement in Python?",
        answer: "It is a null statement used to define an empty block",
        options: [
            "To terminate a loop",
            "To skip the current iteration",
            "It is a null statement used to define an empty block",
            "To pass control to another function"
        ]
    },
    {
        numb: 16,
        question: "What is the output of 'print(9 // 2)'?",
        answer: "4",
        options: [
            "4.5",
            "4",
            "5",
            "Error"
        ]
    },
    {
        numb: 17,
        question: "What is the correct way to declare a global variable inside a function?",
        answer: "Use the 'global' keyword",
        options: [
            "Use the 'global' keyword",
            "Directly assign a value to it",
            "Declare it outside the function",
            "Use the 'nonlocal' keyword"
        ]
    },
    {
        numb: 18,
        question: "Which of these is not a core data type in Python?",
        answer: "Class",
        options: [
            "List",
            "Tuple",
            "Dictionary",
            "Class"
        ]
    },
    {
        numb: 19,
        question: "What does the 'enumerate()' function do?",
        answer: "Adds a counter to an iterable and returns it",
        options: [
            "Enumerates all items in a list",
            "Converts a tuple into an enumerated list",
            "Adds a counter to an iterable and returns it",
            "Counts the number of elements in an iterable"
        ]
    },
    {
        numb: 20,
        question: "What is the output of 'bool([])'?",
        answer: "False",
        options: [
            "True",
            "False",
            "Error",
            "None"
        ]
    }

];