// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "Which of the following is a loop structure in C++?",
        answer: "for",
        options: [
            "if",
            "for",
            "cout",
            "array"
        ]
    },
    {
        numb: 2,
        question: "What is the correct way to declare a namespace called myNamespace in C++?",
        answer: "namespace myNamespace {}",
        options: [
            "namespace myNamespace {}",
            "new namespace myNamespace;",
            "class myNamespace {}",
            "package myNamespace;"
        ]
    },
    {
        numb: 3,
        question: "What is the default access specifier for members of a class in C++?",
        answer: "private",
        options: [
            "public",
            "private",
            "protected",
            "internal"
        ]
    },
    {
        numb: 4,
        question: "What is the output of 'std::cout << 5 + 2 * 3;'?",
        answer: "11",
        options: [
            "21",
            "16",
            "11",
            "14"
        ]
    },
    {
        numb: 5,
        question: "What does the C++ 'break' statement do?",
        answer: "Terminates the loop or switch statement",
        options: [
            "Pauses the loop execution",
            "Terminates the loop or switch statement",
            "Skips the current iteration of the loop",
            "Exits the program"
        ]
    },
    {
        numb: 6,
        question: "Which keyword is used to define a structure in C++?",
        answer: "struct",
        options: [
            "class",
            "package",
            "struct",
            "array"
        ]
    },
    {
        numb: 7,
        question: "What is the output of 'std::cout << sizeof(char);'?",
        answer: "1",
        options: [
            "1",
            "2",
            "4",
            "8"
        ]
    },
    {
        numb: 8,
        question: "What is a destructor in C++?",
        answer: "A special member function that is called when an object is destroyed",
        options: [
            "A function to initialize objects",
            "A normal function used to destroy variables",
            "A template function",
            "A special member function that is called when an object is destroyed"
        ]
    },
    {
        numb: 9,
        question: "Which of the following is not a valid C++ identifier?",
        answer: "int",
        options: [
            "MyVariable",
            "_myVar",
            "m9Var",
            "int"
        ]
    },
    {
        numb: 10,
        question: "Which header file is required for using std::vector?",
        answer: "vector",
        options: [
            "list",
            "array",
            "vector",
            "iostream"
        ]
    },
    {
        numb: 11,
        question: "What is the purpose of the 'std::endl' manipulator?",
        answer: "Inserts a new line and flushes the stream",
        options: [
            "Ends the line of code",
            "Prints an empty line",
            "Inserts a space",
            "Inserts a new line and flushes the stream"
        ]
    },
    {
        numb: 12,
        question: "What is a template in C++?",
        answer: "A way to write generic code",
        options: [
            "A predefined class",
            "A function that must be overridden",
            "A way to write generic code",
            "A tool for debugging"
        ]
    },
    {
        numb: 13,
        question: "What is an abstract class in C++?",
        answer: "A class that cannot be instantiated and may contain pure virtual functions",
        options: [
            "A class that is used for creating objects",
            "A class with only private members",
            "A class that contains static methods only",
            "A class that cannot be instantiated and may contain pure virtual functions"
        ]
    },
    {
        numb: 14,
        question: "What is the output of 'std::cout << (5 | 3);'?",
        answer: "7",
        options: [
            "8",
            "7",
            "6",
            "5"
        ]
    },
    {
        numb: 15,
        question: "Which of the following correctly declares a pointer?",
        answer: "int* ptr;",
        options: [
            "ptr int;",
            "int ptr*;",
            "int* ptr;",
            "int &ptr;"
        ]
    },
    {
        numb: 16,
        question: "What is an object in C++?",
        answer: "An instance of a class",
        options: [
            "A type of data",
            "A function inside a class",
            "An instance of a class",
            "A variable declaration"
        ]
    },
    {
        numb: 17,
        question: "What is the output of 'std::cout << (true && false);'?",
        answer: "0",
        options: [
            "true",
            "1",
            "false",
            "0"
        ]
    },
    {
        numb: 18,
        question: "What is an inline function in C++?",
        answer: "A function that is expanded in line when it is called",
        options: [
            "A function that is defined inside a class",
            "A function that is expanded in line when it is called",
            "A function that can be modified at runtime",
            "A function that is called at the beginning of the program"
        ]
    },
    {
        numb: 19,
        question: "What is function overloading in C++?",
        answer: "Defining multiple functions with the same name but different parameters",
        options: [
            "Changing the return type of a function",
            "Calling a function from another function",
            "Defining multiple functions with the same name but different parameters",
            "Creating a function inside another function"
        ]
    },
    {
        numb: 20,
        question: "Which loop structure should be used when the number of iterations is known?",
        answer: "for loop",
        options: [
            "while loop",
            "do-while loop",
            "for loop",
            "All of the above"
        ]
    },
    {
        numb: 21,
        question: "Which of the following is a correct identifier in C++?",
        answer: "_myVar",
        options: [
            "7varName",
            "_myVar",
            "my-Var",
            "None of the above"
        ]
    },
    {
        numb: 22,
        question: "Which of the following is used for comments in C++?",
        answer: "// and /* */",
        options: [
            "//",
            "/* */",
            "#",
            "// and /* */"
        ]
    },
    {
        numb: 23,
        question: "How do you create a reference variable of an existing variable?",
        answer: "int &ref = existingVar;",
        options: [
            "int ref = &existingVar;",
            "int &ref = existingVar;",
            "int ref = existingVar;",
            "int *ref = existingVar;"
        ]
    },
    {
        numb: 24,
        question: "What is the use of the 'break' statement in C++?",
        answer: "It is used to terminate a loop or switch statement",
        options: [
            "To break the program into multiple files",
            "It is used to terminate a loop or switch statement",
            "To exit a function",
            "To pause the execution of the program"
        ]
    },
    {
        numb: 25,
        question: "What is the output of 'std::cout << 5 + '3';'?",
        answer: "56",
        options: [
            "8",
            "53",
            "Error",
            "56"
        ]
    },
    {
        numb: 26,
        question: "Which of the following is a correct way to declare a multi-dimensional array in C++?",
        answer: "int arr[3][4];",
        options: [
            "int arr[3,4];",
            "int arr(3)(4);",
            "int arr[3][4];",
            "int [3][4] arr;"
        ]
    },
    {
        numb: 27,
        question: "What is the default access specifier for members of a class in C++?",
        answer: "private",
        options: [
            "public",
            "private",
            "protected",
            "None of the above"
        ]
    },
    {
        numb: 28,
        question: "Which of the following is true about the 'this' pointer in C++?",
        answer: "It is a pointer that points to the current object",
        options: [
            "It is a keyword used to define objects",
            "It is used to create new objects",
            "It is a pointer that points to the current object",
            "It is a special type of function in a class"
        ]
    },
    {
        numb: 29,
        question: "What is the output of 'std::cout << (10 != 20);'?",
        answer: "1",
        options: [
            "0",
            "1",
            "10",
            "20"
        ]
    },
    {
        numb: 30,
        question: "Which header file is necessary to use the 'std::string' type in C++?",
        answer: "string",
        options: [
            "stdio.h",
            "stdlib.h",
            "string.h",
            "string"
        ]
    }

];