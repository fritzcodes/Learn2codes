// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "What is C++?",
        answer: "A general-purpose programming language",
        options: [
            "A web development language",
            "A machine language",
            "A markup language",
            "A general-purpose programming language"
        ]
    },
    {
        numb: 2,
        question: "What is the correct syntax to output 'Hello World' in C++?",
        answer: "std::cout << 'Hello World';",
        options: [
            "Console.WriteLine('Hello World');",
            "print('Hello World');",
            "echo 'Hello World';",
            "std::cout << 'Hello World';"
        ]
    },
    {
        numb: 3,
        question: "Which data type is used to create a variable that should store text in C++?",
        answer: "string",
        options: [
            "txt",
            "str",
            "string",
            "String"
        ]
    },
    {
        numb: 4,
        question: "How do you insert COMMENTS in C++ code?",
        answer: "// for a single-line comment and /* */ for a multi-line comment",
        options: [
            "# for a single-line comment and /* */ for a multi-line comment",
            "// for a single-line comment and <!-- --> for a multi-line comment",
            "// for a single-line comment and /* */ for a multi-line comment",
            "-- for a single-line comment and /**/ for a multi-line comment"
        ]
    },
    {
        numb: 5,
        question: "Which of the following is the boolean operator for logical AND in C++?",
        answer: "&&",
        options: [
            "AND",
            "&",
            "&&",
            "||"
        ]
    },
    {
        numb: 6,
        question: "How do you create a variable with the numeric value 5?",
        answer: "int x = 5;",
        options: [
            "num x = 5",
            "int x = 5;",
            "double x = 5",
            "number x = 5"
        ]
    },
    {
        numb: 7,
        question: "Which keyword is used to create a class in C++?",
        answer: "class",
        options: [
            "class",
            "Class",
            "className",
            "NewClass"
        ]
    },
    {
        numb: 8,
        question: "Which header file lets us work with input and output objects?",
        answer: "#include <iostream>",
        options: [
            "#include <inputstream>",
            "#include <iostream>",
            "#include <ios>",
            "#include <stream>"
        ]
    },
    {
        numb: 9,
        question: "Which method can be used to find the length of a string object named 'myString'?",
        answer: "myString.length()",
        options: [
            "myString.length()",
            "myString.size()",
            "length(myString)",
            "getLength(myString)"
        ]
    },
    {
        numb: 10,
        question: "What is the output of 'std::cout << 10/4;'?",
        answer: "2",
        options: [
            "2",
            "2.5",
            "0",
            "2.0"
        ]
    }

];