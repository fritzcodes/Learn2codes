// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "What is the purpose of the 'mutable' keyword in C++?",
        answer: "Allows a member of an object to be modified even if the object is const",
        options: [
            "Makes a variable changeable",
            "Allows a member of an object to be modified even if the object is const",
            "Ensures that a variable retains its value between function calls",
            "Declares a thread-safe variable"
        ]
    },
    {
        numb: 2,
        question: "Which of the following best describes RAII in C++?",
        answer: "Resource Acquisition Is Initialization - managing resources with object lifetimes",
        options: [
            "Runtime Algorithm Implementation Interface",
            "Resource Acquisition Is Initialization - managing resources with object lifetimes",
            "Recursive API Integration",
            "Random Access Iterator Implementation"
        ]
    },
    {
        numb: 3,
        question: "What is 'placement new' in C++?",
        answer: "Constructing an object in a pre-allocated memory buffer",
        options: [
            "Creating a new object at a specific memory location",
            "Allocating memory for a new object in a specific memory pool",
            "Constructing an object in a pre-allocated memory buffer",
            "Inserting a new element in a specific position of a container"
        ]
    },
    {
        numb: 4,
        question: "What will be the output of the following code?\n\n```cpp\n#include<iostream>\nusing namespace std;\nint main() {\n    int arr[] = {10, 20, 30};\n    cout << 2[arr] << endl;\n}\n```",
        answer: "30",
        options: [
            "10",
            "20",
            "30",
            "Undefined behavior"
        ]
    },
    {
        numb: 5,
        question: "Which of the following is a correct identifier in C++?",
        answer: "_myVar",
        options: [
            "7var",
            "_myVar",
            "my-Var",
            "my Var"
        ]
    },
    {
        numb: 6,
        question: "What is the purpose of the 'mutable' keyword in C++?",
        answer: "Allows a member of an object to be modified even if the object is const",
        options: [
            "Allows a member of an object to be modified even if the object is const",
            "Indicates that an object can change its internal state",
            "Allows changing the value of a variable at runtime",
            "Makes a variable available throughout the program"
        ]
    },
    {
        numb: 7,
        question: "What is the problem with using the following macro in C++?\n\n```cpp\n#define SQUARE(x) x*x\n```",
        answer: "Incorrect results due to operator precedence when used with expressions",
        options: [
            "Macros are deprecated in modern C++",
            "Incorrect results due to operator precedence when used with expressions",
            "It will cause a compilation error",
            "It violates the OOP principles"
        ]
    },
    {
        numb: 8,
        question: "What does the following C++ code output?\n\n```cpp\n#include <iostream>\nusing namespace std;\nclass Base {\npublic:\n    virtual ~Base() { cout << \"Base destroyed\"; }\n};\nclass Derived : public Base {\npublic:\n    ~Derived() { cout << \"Derived destroyed\"; }\n};\nint main() {\n    Base *b = new Derived();\n    delete b;\n}\n```",
        answer: "Derived destroyedBase destroyed",
        options: [
            "Base destroyed",
            "Derived destroyed",
            "Derived destroyedBase destroyed",
            "No output"
        ]
    },
    {
        numb: 9,
        question: "What is 'RAII' in C++?",
        answer: "Resource Acquisition Is Initialization",
        options: [
            "Random Access Iterator Implementation",
            "Resource Acquisition Is Initialization",
            "Recursive Algorithm Implementation",
            "Runtime Array Indexing"
        ]
    },
    {
        numb: 10,
        question: "Which of the following correctly describes a lambda expression in C++?",
        answer: "An anonymous function object capable of capturing variables in scope",
        options: [
            "A special kind of loop",
            "An anonymous function object capable of capturing variables in scope",
            "A macro function",
            "An exception handling mechanism"
        ]
    },
    {
    numb: 11,
    question: "Which of the following correctly describes the 'Rule of Three' in C++?",
    answer: "If a class defines one of the following, it should probably define all three: destructor, copy constructor, copy assignment operator",
    options: [
        "A class should always have three member functions: a constructor, a destructor, and a copy constructor",
        "If a class defines one of the following, it should probably define all three: destructor, copy constructor, copy assignment operator",
        "Every class should have three friends: another class, a function, and an operator",
        "A class should have three modes of inheritance: public, protected, and private"
    ]
    },
    {
        numb: 12,
        question: "What does the keyword 'mutable' allow for a const member function?",
        answer: "Modification of certain data members",
        options: [
            "Changing the function's return type",
            "Modification of any data members",
            "Modification of certain data members",
            "Declaring new data members"
        ]
    },
    {
        numb: 13,
        question: "What is the purpose of the 'volatile' keyword in C++?",
        answer: "To tell the compiler not to optimize the usage of the variable",
        options: [
            "To ensure variable modifications are not visible to other threads",
            "To tell the compiler not to optimize the usage of the variable",
            "To make a variable thread-safe",
            "To allocate the variable in volatile memory"
        ]
    },
    {
        numb: 14,
        question: "Which of the following is not a valid use of static_cast in C++?",
        answer: "Casting a base class pointer to a derived class pointer without a virtual function",
        options: [
            "Converting integers to float",
            "Casting a derived class pointer to a base class pointer",
            "Converting a char to an int",
            "Casting a base class pointer to a derived class pointer without a virtual function"
        ]
    },
    {
        numb: 15,
        question: "What is the main problem with the following function definition?\n\n```cpp\nint& getNumber() {\n    int number = 10;\n    return number;\n}\n```",
        answer: "Returning a reference to a local variable",
        options: [
            "Returning a reference to a local variable",
            "The function should return an int, not an int&",
            "There is no return statement in the function",
            "The local variable should be declared as static"
        ]
    }

];