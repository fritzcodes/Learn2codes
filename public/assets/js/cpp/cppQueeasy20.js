// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "What is the output of 'std::cout << 5 * 2;'?",
        answer: "10",
        options: [
            "7",
            "10",
            "52",
            "Error"
        ]
    },
    {
        numb: 2,
        question: "Which operator is used for dereferencing a pointer in C++?",
        answer: "*",
        options: [
            "&",
            "*",
            "->",
            "[]"
        ]
    },
    {
        numb: 3,
        question: "What does the C++ 'continue' statement do?",
        answer: "Skips the rest of the loop body and continues with the next iteration",
        options: [
            "Terminates the loop",
            "Pauses the execution of the loop",
            "Skips the rest of the loop body and continues with the next iteration",
            "Exits the program"
        ]
    },
    {
        numb: 4,
        question: "Which header file is required for using cout and cin?",
        answer: "iostream",
        options: [
            "stdio.h",
            "stdlib.h",
            "iostream",
            "conio.h"
        ]
    },
    {
        numb: 5,
        question: "What is the correct syntax to declare a C++ array?",
        answer: "int arr[10];",
        options: [
            "int arr[10];",
            "array arr[10];",
            "int arr[] = 10;",
            "int [10] arr;"
        ]
    },
    {
        numb: 6,
        question: "Which keyword is used to define a class in C++?",
        answer: "class",
        options: [
            "Class",
            "class",
            "object",
            "struct"
        ]
    },
    {
        numb: 7,
        question: "What is the size of 'int' on most C++ compilers?",
        answer: "4 bytes",
        options: [
            "2 bytes",
            "4 bytes",
            "8 bytes",
            "Depends on the value stored"
        ]
    },
    {
        numb: 8,
        question: "What is a constructor in C++?",
        answer: "A special member function that is called when an object is created",
        options: [
            "A function to destroy objects",
            "A normal function used to initialize variables",
            "A special member function that is called when an object is created",
            "A template function"
        ]
    },
    {
        numb: 9,
        question: "What is the correct syntax to inherit class B from class A?",
        answer: "class B : public A {}",
        options: [
            "class B - public A {}",
            "class B : public A {}",
            "class B inherits A {}",
            "class B extends A {}"
        ]
    },
    {
        numb: 10,
        question: "What is a virtual function in C++?",
        answer: "A function that can be overridden in a derived class",
        options: [
            "A function that performs a specific task",
            "A function that can be overridden in a derived class",
            "A function that is only used in virtual classes",
            "A function that cannot be accessed"
        ]
    },
    {
        numb: 11,
        question: "What does NULL represent in C++?",
        answer: "A macro representing a null pointer",
        options: [
            "A character",
            "Zero",
            "A macro representing a null pointer",
            "Undefined value"
        ]
    },
    {
        numb: 12,
        question: "What is the output of 'std::cout << (10 == 10);'?",
        answer: "1",
        options: [
            "True",
            "False",
            "1",
            "0"
        ]
    },
    {
        numb: 13,
        question: "What is the scope resolution operator in C++?",
        answer: "::",
        options: [
            "::",
            "->",
            ".",
            "++"
        ]
    },
    {
        numb: 14,
        question: "What is the keyword 'new' used for in C++?",
        answer: "To dynamically allocate memory",
        options: [
            "To create a new variable",
            "To start a new function",
            "To create a new array",
            "To dynamically allocate memory"
        ]
    },
    {
        numb: 15,
        question: "What does the C++ 'delete' operator do?",
        answer: "Deallocates memory allocated by new",
        options: [
            "Removes a variable from memory",
            "Deletes a file",
            "Deallocates memory allocated by new",
            "Clears the value of a variable"
        ]
    },
    {
        numb: 16,
        question: "Which data type is used to store boolean values in C++?",
        answer: "bool",
        options: [
            "bit",
            "boolean",
            "bool",
            "binary"
        ]
    },
    {
        numb: 17,
        question: "What is the output of 'std::cout << (5 && 0);'?",
        answer: "0",
        options: [
            "1",
            "0",
            "5",
            "Error"
        ]
    },
    {
        numb: 18,
        question: "Which of the following is a valid comment in C++?",
        answer: "// This is a comment",
        options: [
            "# This is a comment",
            "// This is a comment",
            "/* This is a comment */",
            "Both // This is a comment and /* This is a comment */"
        ]
    },
    {
        numb: 19,
        question: "How do you declare a constant in C++?",
        answer: "const int x = 10;",
        options: [
            "constant int x = 10;",
            "int const x = 10;",
            "const int x = 10;",
            "int x = const 10;"
        ]
    },
    {
        numb: 20,
        question: "What is the correct syntax to create an object of class MyClass?",
        answer: "MyClass obj;",
        options: [
            "create MyClass obj;",
            "new MyClass obj;",
            "MyClass obj;",
            "Class MyClass obj;"
        ]
    }

];