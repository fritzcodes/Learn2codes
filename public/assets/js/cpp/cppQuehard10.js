// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "Which C++ feature allows a function to have default parameters?",
        answer: "Function overloading",
        options: [
            "Templates",
            "Function overloading",
            "Inheritance",
            "Macros"
        ]
    },
    {
        numb: 2,
        question: "What does 'SFINAE' stand for in C++ template metaprogramming?",
        answer: "Substitution Failure Is Not An Error",
        options: [
            "Syntax Failure Is Not An Error",
            "Substitution Failure Is Not An Error",
            "Static Function Is Not An Exception",
            "Standard Format Is Not Always Essential"
        ]
    },
    {
        numb: 3,
        question: "In C++, what is the 'Rule of Three'?",
        answer: "If a class defines one of the following it should probably define all three: destructor, copy constructor, copy assignment operator",
        options: [
            "For loop, while loop, do-while loop",
            "Public, protected, private access specifiers",
            "If a class defines one of the following it should probably define all three: destructor, copy constructor, copy assignment operator",
            "Input, process, output"
        ]
    },
    {
        numb: 4,
        question: "Which feature in C++ can be used to avoid object slicing?",
        answer: "Pointers or references",
        options: [
            "Templates",
            "Virtual functions",
            "Inheritance",
            "Pointers or references"
        ]
    },
    {
        numb: 5,
        question: "What is the result of executing 'dynamic_cast' on a pointer that cannot be cast to the target type?",
        answer: "It returns nullptr",
        options: [
            "It returns nullptr",
            "It throws a bad_cast exception",
            "It returns the original pointer without casting",
            "It causes a compile-time error"
        ]
    },
    {
        numb: 6,
        question: "In C++, what is 'placement new'?",
        answer: "Allocating an object in a pre-allocated buffer",
        options: [
            "Creating a new instance with default placement",
            "Replacing an old object with a new one",
            "Allocating an object in a pre-allocated buffer",
            "Creating a new object in the same memory location as an existing object"
        ]
    },
    {
        numb: 7,
        question: "How can you prevent object slicing in C++?",
        answer: "Use pointers or references to base class type",
        options: [
            "Use virtual constructors",
            "Use pointers or references to base class type",
            "Declare the class as 'final'",
            "Use private constructors"
        ]
    },
    {
        numb: 8,
        question: "What is the output of the following code snippet?\n\n```cpp\nint x = 10;\nint& ref = x;\nref = 20;\nstd::cout << x;\n```",
        answer: "20",
        options: [
            "10",
            "20",
            "0",
            "An error occurs"
        ]
    },
    {
        numb: 9,
        question: "In C++, how can you achieve compile-time polymorphism?",
        answer: "Function overloading and templates",
        options: [
            "Virtual functions",
            "Function overloading and templates",
            "Dynamic_cast",
            "Using function pointers"
        ]
    },
    {
        numb: 10,
        question: "What is the issue with the following code snippet?\n\n```cpp\nvoid process(std::shared_ptr<int> ptr) {}\n\nint main() {\n    int* rawPtr = new int(10);\n    process(rawPtr);\n}\n```",
        answer: "The raw pointer is not managed by the shared_ptr, leading to memory leak",
        options: [
            "Shared_ptr cannot be initialized with a raw pointer",
            "The raw pointer is not managed by the shared_ptr, leading to memory leak",
            "There is no issue with the code",
            "The function process should take a raw pointer as an argument"
        ]
    }

];