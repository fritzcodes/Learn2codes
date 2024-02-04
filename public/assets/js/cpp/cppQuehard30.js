// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "What is the result of deleting a pointer twice?",
        answer: "Undefined behavior",
        options: [
            "Compiler error",
            "No impact",
            "Undefined behavior",
            "Memory leak"
        ]
    },
    {
        numb: 2,
        question: "What does the 'mutable' keyword in C++ signify?",
        answer: "A member variable can be modified in a const function",
        options: [
            "The variable can change its type at runtime",
            "A member variable can be modified in a const function",
            "The variable can be shared across threads without locks",
            "The variable is thread-safe"
        ]
    },
    {
        numb: 3,
        question: "Which of the following is not a type of inheritance in C++?",
        answer: "Multiple inheritance",
        options: [
            "Single inheritance",
            "Multiple inheritance",
            "Multilevel inheritance",
            "Hybrid inheritance"
        ]
    },
    {
        numb: 4,
        question: "What is 'RAII' in C++?",
        answer: "Resource Acquisition Is Initialization",
        options: [
            "Resource Allocation Is Initialization",
            "Resource Acquisition Is Initialization",
            "Runtime Algorithm Implementation Interface",
            "Recursive Algorithm Inheritance Initialization"
        ]
    },
    {
        numb: 5,
        question: "In C++, what does the 'explicit' keyword prevent?",
        answer: "Implicit conversions by the constructor",
        options: [
            "Inheritance of a class",
            "Overloading of functions",
            "Implicit conversions by the constructor",
            "Copying of objects"
        ]
    },
    {
        numb: 6,
        question: "What is the main purpose of 'friend' functions in C++?",
        answer: "To allow access to private and protected members of a class",
        options: [
            "To enhance encapsulation",
            "To implement polymorphism",
            "To perform file operations",
            "To allow access to private and protected members of a class"
        ]
    },
    {
        numb: 7,
        question: "Which of the following is not a feature of C++11 lambda expressions?",
        answer: "They can only capture variables by value",
        options: [
            "They can be used to create anonymous functions",
            "They can capture external variables",
            "They can be passed as arguments to functions",
            "They can only capture variables by value"
        ]
    },
    {
        numb: 8,
        question: "What is the significance of a 'constexpr' function in C++?",
        answer: "It can be evaluated at compile time",
        options: [
            "It can change the value of a const variable",
            "It can only be used in constant expressions",
            "It guarantees exception safety",
            "It can be evaluated at compile time"
        ]
    },
    {
        numb: 9,
        question: "What is 'SFINAE' in C++ template metaprogramming?",
        answer: "Substitution Failure Is Not An Error",
        options: [
            "Static Function Inlining and Analysis Engine",
            "Substitution Failure Is Not An Error",
            "Standard Function Interface Notation and Encoding",
            "Simplified Function Invocation and Normalization Entity"
        ]
    },
    {
        numb: 10,
        question: "What does the 'noexcept' specifier in C++ indicate?",
        answer: "The function does not throw exceptions",
        options: [
            "The function is optimized for non-exceptional cases",
            "The function is deprecated",
            "The function does not throw exceptions",
            "The function has no external side effects"
        ]
    },
    {
        numb: 11,
        question: "What does the 'constexpr' keyword indicate in C++?",
        answer: "The expression can be evaluated at compile-time",
        options: [
            "The function must be executed at runtime",
            "The expression can be evaluated at compile-time",
            "The variable can be modified at runtime",
            "The function can modify a global variable"
        ]
    },
    {
        numb: 12,
        question: "What is the purpose of the 'explicit' keyword in C++?",
        answer: "Prevent implicit type conversions",
        options: [
            "Indicate a function is a friend of a class",
            "Prevent explicit type conversions",
            "Specify a default value for a function parameter",
            "Mark a class as an abstract class"
        ]
    },
    {
        numb: 13,
        question: "Which C++ feature allows a function to have multiple forms with the same name but different parameters?",
        answer: "Function overloading",
        options: [
            "Function overloading",
            "Function overriding",
            "Function polymorphism",
            "Function encapsulation"
        ]
    },
    {
        numb: 14,
        question: "What does the 'mutable' keyword in C++ signify when applied to a class member variable?",
        answer: "It can be modified in a const member function",
        options: [
            "It can be changed by any function, regardless of the constness of the function",
            "It cannot be modified after initialization",
            "It can be modified in a const member function",
            "It indicates thread-safe access to the variable"
        ]
    },
    {
        numb: 15,
        question: "Which of the following best describes 'RAII' in C++?",
        answer: "Resource acquisition is initialization",
        options: [
            "Resource allocation is incremental",
            "Resource acquisition is initialization",
            "Runtime algorithm improvement interface",
            "Random access iterator implementation"
        ]
    },
    {
        numb: 16,
        question: "Which C++ feature helps in resolving the diamond problem in inheritance?",
        answer: "Virtual inheritance",
        options: [
            "Virtual functions",
            "Abstract classes",
            "Virtual inheritance",
            "Friend classes"
        ]
    },
    {
        numb: 17,
        question: "In C++, which keyword is used to override a virtual function in a derived class?",
        answer: "override",
        options: [
            "override",
            "virtual",
            "super",
            "new"
        ]
    },
    {
        numb: 18,
        question: "What is the main purpose of the 'std::move' function in C++?",
        answer: "To convert an object into an r-value reference",
        options: [
            "To move an object from one memory location to another",
            "To change ownership of a resource from one smart pointer to another",
            "To convert an object into an r-value reference",
            "To safely transfer data between threads"
        ]
    },
    {
        numb: 19,
        question: "What is a 'delegating constructor' in C++?",
        answer: "A constructor that calls another constructor of the same class",
        options: [
            "A constructor that passes control to a base class constructor",
            "A constructor that calls another constructor of the same class",
            "A constructor that delegates its tasks to a member function",
            "A constructor that is called by a delegate function"
        ]
    },
    {
        numb: 20,
        question: "In C++, what is the effect of declaring a destructor 'virtual'?",
        answer: "Ensures proper destruction of derived class objects through base class pointers",
        options: [
            "Prevents the destructor from being overridden in derived classes",
            "Enables polymorphic behavior for destruction",
            "Ensures proper destruction of derived class objects through base class pointers",
            "Makes the class abstract"
        ]
    },
    {
        numb: 21,
        question: "Which of the following is a correct usage of the 'explicit' keyword in C++?",
        answer: "To prevent implicit conversions by single-argument constructors",
        options: [
            "To specify explicit memory management in class constructors",
            "To declare explicitly inline functions",
            "To prevent implicit conversions by single-argument constructors",
            "To explicitly define a virtual function"
        ]
    },
    {
        numb: 22,
        question: "What is a 'lambda expression' in C++?",
        answer: "An anonymous function object capable of capturing variables in scope",
        options: [
            "A special syntax for initializing arrays",
            "A macro that is expanded at compile time",
            "An anonymous function object capable of capturing variables in scope",
            "A template for creating generic functions"
        ]
    },
    {
        numb: 23,
        question: "Which of the following is true about 'constexpr' in C++?",
        answer: "It declares that the value of a variable or function can be evaluated at compile time",
        options: [
            "It guarantees that a variable will be initialized at runtime",
            "It is another keyword for declaring constant variables",
            "It declares that the value of a variable or function can be evaluated at compile time",
            "It is used to check expressions at runtime for constness"
        ]
    },
    {
        numb: 24,
        question: "In C++, what is 'SFINAE'?",
        answer: "Substitution Failure Is Not An Error",
        options: [
            "Static Function Inlining As a Namespace Extension",
            "Standard Format for Interface and Network Engineering",
            "Substitution Failure Is Not An Error",
            "Secure File Input/Output And Network Encryption"
        ]
    },
    {
        numb: 25,
        question: "Which feature in C++11 allows for automatic type deduction in range-based for loops?",
        answer: "auto",
        options: [
            "decltype",
            "auto",
            "lambda",
            "constexpr"
        ]
    },
    {
        numb: 26,
        question: "What does the 'noexcept' specifier indicate in C++?",
        answer: "The function does not throw exceptions",
        options: [
            "The function does not accept any parameters",
            "The function does not return any value",
            "The function does not throw exceptions",
            "The function cannot be modified after compilation"
        ]
    },
    {
        numb: 27,
        question: "What is the purpose of a 'static_assert' in C++?",
        answer: "To perform compile-time assertions",
        options: [
            "To create a static variable that cannot be changed",
            "To check the size of an object at runtime",
            "To perform compile-time assertions",
            "To declare a function that does not change any member variables"
        ]
    },
    {
        numb: 28,
        question: "In C++, what is the effect of using 'final' with a class?",
        answer: "Prevents the class from being inherited",
        options: [
            "Makes all member functions constant",
            "Prevents the class from being inherited",
            "Ensures that all member variables are initialized",
            "Specifies that the class uses finalization instead of garbage collection"
        ]
    },
    {
        numb: 29,
        question: "What is the purpose of the 'alignas' specifier in C++?",
        answer: "To specify the alignment requirement of a type or object",
        options: [
            "To align a block of code for better readability",
            "To align data members in a struct or class for performance",
            "To ensure that functions are aligned in memory for faster access",
            "To specify the alignment requirement of a type or object"
        ]
    },
    {
        numb: 30,
        question: "In C++, what is the primary use of a 'constexpr' function?",
        answer: "To generate compile-time constants",
        options: [
            "To create inline functions for optimization",
            "To ensure that a function is executed at runtime",
            "To generate compile-time constants",
            "To define functions that can be executed in a constexpr context"
        ]
    }
];
