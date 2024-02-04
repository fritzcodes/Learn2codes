// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "What is the 'Rule of Five' in C++?",
        answer: "Special member functions that should be declared for proper management of resources.",
        options: [
            "A coding guideline for better performance.",
            "Five basic rules for object-oriented programming.",
            "Special member functions that should be declared for proper management of resources.",
            "A rule about exception handling."
        ]
    },
    {
        numb: 2,
        question: "How does a 'constexpr' function differ from a regular function?",
        answer: "It can be executed at compile-time.",
        options: [
            "It has a fixed execution path.",
            "It always returns a constant.",
            "It can be executed at compile-time.",
            "It can't throw exceptions."
        ]
    },
    {
        numb: 3,
        question: "What is 'SFINAE' (Substitution Failure Is Not An Error)?",
        answer: "A rule in template metaprogramming where failure to substitute types doesn't result in a compilation error.",
        options: [
            "A syntax error handling mechanism.",
            "A rule in template metaprogramming where failure to substitute types doesn't result in a compilation error.",
            "A debugging technique.",
            "An exception handling principle."
        ]
    },
    {
        numb: 4,
        question: "What is the purpose of a 'delegating constructor' in C++?",
        answer: "To call another constructor of the same class to initialize the object.",
        options: [
            "To delegate construction to a base class.",
            "To call another constructor of the same class to initialize the object.",
            "To delegate object creation to a factory method.",
            "To construct objects in a multithreaded environment."
        ]
    },
    {
        numb: 5,
        question: "What is the result of 'sizeof(bool)' in C++?",
        answer: "Implementation-defined, usually 1.",
        options: [
            "1 byte",
            "2 bytes",
            "Implementation-defined, usually 1.",
            "4 bytes"
        ]
    },
    {
        numb: 6,
        question: "What does the 'explicit' keyword prevent in C++?",
        answer: "Implicit conversions and copy-initialization.",
        options: [
            "Class inheritance",
            "Overloading of functions",
            "Implicit conversions and copy-initialization.",
            "Virtual function overriding"
        ]
    },
    {
        numb: 7,
        question: "What is the main purpose of 'RAII' (Resource Acquisition Is Initialization) in C++?",
        answer: "Managing resource allocation and deallocation through object lifetimes.",
        options: [
            "Improving performance by pre-allocating resources.",
            "Ensuring type safety during initialization.",
            "Implementing exception handling mechanisms.",
            "Managing resource allocation and deallocation through object lifetimes."
        ]
    },
    {
        numb: 8,
        question: "What is a 'lambda expression' in C++?",
        answer: "An anonymous function object capable of capturing variables in scope.",
        options: [
            "A function that returns a boolean value.",
            "An expression used for template metaprogramming.",
            "A macro that simplifies complex calculations.",
            "An anonymous function object capable of capturing variables in scope."
        ]
    },
    {
        numb: 9,
        question: "In C++, what is 'undefined behavior'?",
        answer: "Any behavior not defined by the C++ standard, which can lead to unpredictable results.",
        options: [
            "A programming error that always leads to a runtime error.",
            "The behavior of unimplemented virtual functions.",
            "A compiler error due to incorrect syntax.",
            "Any behavior not defined by the C++ standard, which can lead to unpredictable results."
        ]
    },
    {
        numb: 10,
        question: "What is the purpose of the 'yield' keyword in C#?",
        answer: "To provide a value to the enumerator object or to signal the end of iteration.",
        options: [
            "To break out of a loop immediately.",
            "To allocate memory dynamically.",
            "To provide a value to the enumerator object or to signal the end of iteration.",
            "To throw an exception in a try-catch block."
        ]
    },
    {
        numb: 11,
        question: "In C#, what does the 'volatile' keyword ensure?",
        answer: "That a field can be modified by multiple threads without using lock statements.",
        options: [
            "That the field is serialized.",
            "That a field is only modifiable within its defining class.",
            "That a field can be modified by multiple threads without using lock statements.",
            "That a field value is not cached and is always read from the main memory."
        ]
    },
    {
        numb: 12,
        question: "What is 'Expression Trees' used for in C#?",
        answer: "Representing code in a tree-like data structure, which can be inspected or modified.",
        options: [
            "Error handling in asynchronous programming.",
            "Optimizing performance in large scale applications.",
            "Representing code in a tree-like data structure, which can be inspected or modified.",
            "Creating a collection of lambda expressions."
        ]
    },
    {
        numb: 13,
        question: "What is the significance of 'Task.Run()' over 'Task.Factory.StartNew()' in C#?",
        answer: "It simplifies the API and uses TaskScheduler.Default for scheduling.",
        options: [
            "It allows more control over thread creation.",
            "It simplifies the API and uses TaskScheduler.Default for scheduling.",
            "Task.Run() is obsolete and should not be used.",
            "It supports cancellation and exception handling better."
        ]
    },
    {
        numb: 14,
        question: "What is the purpose of the 'dynamic' keyword in C#?",
        answer: "To define variables whose operations bypass compile-time type checking.",
        options: [
            "To allocate memory dynamically at runtime.",
            "To define variables whose operations bypass compile-time type checking.",
            "To improve performance by delaying object initialization.",
            "To define a variable that changes types during runtime."
        ]
    },
    {
        numb: 15,
        question: "In C#, what is 'covariance and contravariance' in generics?",
        answer: "Allows methods to have more derived return types and less derived argument types.",
        options: [
            "Allows methods to have more derived return types and less derived argument types.",
            "Provides a way to perform operations on different types of generics.",
            "Defines constraints on the types that can be used as parameters for a generic type.",
            "Refers to the conversion of a value type to a reference type and vice versa."
        ]
    }

];