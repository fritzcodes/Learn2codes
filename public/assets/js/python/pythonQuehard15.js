// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "What is the output of 'print(hash((1, 2, 3)))'?",
        answer: "It depends on the execution as hash values may vary",
        options: [
            "A constant unique value",
            "Error as tuples cannot be hashed",
            "It depends on the execution as hash values may vary",
            "0"
        ]
    },
    {
        numb: 2,
        question: "What does the 'else' clause do in a Python 'try' statement?",
        answer: "Executed if the try block does not raise an exception",
        options: [
            "Executed regardless of exception occurrence",
            "Executed if an exception occurs",
            "Executed if the try block does not raise an exception",
            "There is no 'else' clause in a Python 'try' statement"
        ]
    },
    {
        numb: 3,
        question: "What is the output of 'print(all([False, True, True]))'?",
        answer: "False",
        options: [
            "True",
            "False",
            "[False, True, True]",
            "Error"
        ]
    },
    {
        numb: 4,
        question: "What is a 'lambda' function in Python?",
        answer: "An anonymous inline function consisting of a single expression",
        options: [
            "A special type of iterative function",
            "A module in Python for functional programming",
            "A syntax error",
            "An anonymous inline function consisting of a single expression"
        ]
    },
    {
        numb: 5,
        question: "What is the output of 'print('Hello'.find('o'))'?",
        answer: "4",
        options: [
            "True",
            "4",
            "-1",
            "Error"
        ]
    },
    {
        numb: 6,
        question: "What is the output of 'print(2 ** 3 ** 2)'?",
        answer: "512",
        options: [
            "64",
            "256",
            "512",
            "8"
        ]
    },
    {
        numb: 7,
        question: "What is the output of 'print([i for i in range(10) if i < 5 else 10])'?",
        answer: "Syntax Error",
        options: [
            "[0, 1, 2, 3, 4, 10, 10, 10, 10, 10]",
            "[0, 1, 2, 3, 4]",
            "Syntax Error",
            "None"
        ]
    },
    {
        numb: 8,
        question: "What is the purpose of the '__init__' method in Python classes?",
        answer: "To initialize a newly created object",
        options: [
            "To initialize the class itself",
            "To perform garbage collection",
            "To declare class-level attributes",
            "To initialize a newly created object"
        ]
    },
    {
        numb: 9,
        question: "What is the output of 'print('ABCDE'.partition('CD'))'?",
        answer: "('AB', 'CD', 'E')",
        options: [
            "('AB', 'CD', 'E')",
            "('ABC', 'D', 'E')",
            "Error",
            "('AB', 'CDE')"
        ]
    },
    {
        numb: 10,
        question: "What is the output of 'print([i ** 2 for i in range(5)])'?",
        answer: "[0, 1, 4, 9, 16]",
        options: [
            "[1, 2, 3, 4, 5]",
            "[0, 1, 4, 9, 16]",
            "[1, 4, 9, 16, 25]",
            "Error"
        ]
    },
    {
        numb: 11,
        question: "What does the 'global' keyword in Python do?",
        answer: "Allows a function to modify a global variable",
        options: [
            "Declares a new global variable",
            "Imports a global module",
            "Allows a function to modify a global variable",
            "Does nothing special"
        ]
    },
    {
        numb: 12,
        question: "How is memory management handled in Python?",
        answer: "Through automatic garbage collection",
        options: [
            "Manually by the programmer",
            "Through automatic garbage collection",
            "Using reference counting",
            "Python does not handle memory management"
        ]
    },
    {
        numb: 13,
        question: "What is the difference between '==' and 'is' in Python?",
        answer: "'==' checks for value equality, 'is' checks for identity",
        options: [
            "'==' checks for type, 'is' checks for value",
            "There is no difference",
            "'==' checks for value equality, 'is' checks for identity",
            "'is' is used for numerical comparisons only"
        ]
    },
    {
        numb: 14,
        question: "What does the '__name__ == '__main__'' do in Python?",
        answer: "Checks if the script is run as the main program",
        options: [
            "It's a syntax error",
            "Declares a main function",
            "Initializes the interpreter",
            "Checks if the script is run as the main program"
        ]
    },
    {
        numb: 15,
        question: "What is the output of 'print(isinstance('abc', str))'?",
        answer: "True",
        options: [
            "False",
            "Syntax Error",
            "True",
            "'abc'"
        ]
    }

];