// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "What does the 'explicit' keyword prevent in C++?",
        answer: "Implicit conversions and copy-initialization.",
        options: [
        "Implicit conversions and copy-initialization.",
        "Dynamic memory allocation.",
        "Overriding virtual functions.",
        "Using uninitialized variables."
        ]
        },
        
        {
        numb: 2,
        question: "In C++, what is the purpose of a virtual destructor?",
        answer: "To ensure that destructors of derived classes are called when deleting an object through a base class pointer.",
        options: [
        "To improve the performance of destructor calls.",
        "To make a class abstract.",
        "To ensure that destructors of derived classes are called when deleting an object through a base class pointer.",
        "To prevent the instantiation of a class."
        ]
        },
        
        {
        numb: 3,
        question: "What does the 'mutable' keyword allow for a const member function?",
        answer: "Modification of certain class members even when called for const objects.",
        options: [
        "Changing the function's return type at runtime.",
        "Modification of certain class members even when called for const objects.",
        "Making the function thread-safe.",
        "Overriding the function in derived classes."
        ]
        },
        
        {
        numb: 4,
        question: "What is the 'Rule of Three' in C++?",
        answer: "If a class defines one of the following: destructor, copy constructor, or copy assignment operator, it should probably define all three.",
        options: [
        "A guideline for operator overloading.",
        "If a class defines one of the following: destructor, copy constructor, or copy assignment operator, it should probably define all three.",
        "A coding standard for loop construction.",
        "A principle for exception handling."
        ]
        },
        
        {
        numb: 5,
        question: "What is a 'lambda expression' in C++?",
        answer: "An anonymous function object capable of capturing variables in scope.",
        options: [
        "A macro for simple calculations.",
        "An anonymous function object capable of capturing variables in scope.",
        "A built-in data type for mathematical operations.",
        "A technique for dynamic memory allocation."
        ]
        },
        
        {
        numb: 6,
        question: "What does 'RAII' stand for and what does it mean in C++?",
        answer: "Resource Acquisition Is Initialization; it's a programming idiom that ensures resource release.",
        options: [
        "Resource Allocation Is Initialization; it's a principle for optimizing memory usage.",
        "Resource Allocation Inheritance Interface; it's a technique for memory management in inheritance hierarchies.",
        "Resource Acquisition Is Initialization; it's a programming idiom that ensures resource release.",
        "Runtime Algorithm Implementation Interface; it's a method for dynamic algorithm selection."
        ]
        },
        
        {
        numb: 7,
        question: "What is 'undefined behavior' in C++?",
        answer: "A result of executing code whose behavior is not prescribed by the C++ language specifications.",
        options: [
        "An error that causes the program to exit unexpectedly.",
        "The result of a failed dynamic cast.",
        "A result of executing code whose behavior is not prescribed by the C++ language specifications.",
        "The default behavior of unimplemented virtual functions."
        ]
        },
        
        {
        numb: 8,
        question: "What is the purpose of the 'delete' keyword in C++11 and later?",
        answer: "To prevent certain automatic conversions or to disable functions (like preventing copy construction or assignment).",
        options: [
        "To release allocated memory.",
        "To remove elements from STL containers.",
        "To prevent certain automatic conversions or to disable functions (like preventing copy construction or assignment).",
        "To mark deprecated functions."
        ]
        },
        
        {
        numb: 9,
        question: "What is 'std::move' used for in C++?",
        answer: "To convert an object into an r-value reference, enabling move semantics.",
        options: [
        "To move elements between containers without copying.",
        "To change the ownership of resources between smart pointers.",
        "To convert an object into an r-value reference, enabling move semantics.",
        "To dynamically allocate memory on the heap."
        ]
        },
        
        {
        numb: 10,
        question: "What does 'SFINAE' stand for and what is its significance in C++?",
        answer: "Substitution Failure Is Not An Error; it's a principle used in template metaprogramming.",
        options: [
        "Static Function Interface Not Always Executed; it's related to function pointer optimization.",
        "Substitution Failure Is Not An Error; it's a principle used in template metaprogramming.",
        "Simple Forwarding In Network Architecture; it's a concept in multi-threading communication.",
        "Structural Formatting In Native Applications; it's a guideline for structuring code."
        ]
        },
        
        {
        numb: 11,
        question: "What is a 'placement new' in C++?",
        answer: "A way to construct an object in a pre-allocated memory buffer.",
        options: [
        "A method to allocate memory for a new object from a specific memory pool.",
        "A way to construct an object in a pre-allocated memory buffer.",
        "A technique to replace a deleted object with a new one.",
        "Creating a new instance of an object with a higher memory priority."
        ]
        },
        
        {
        numb: 12,
        question: "What is the difference between 'std::endl' and '\n' in C++?",
        answer: "std::endl inserts a newline and flushes the output buffer, while '\n' only inserts a newline.",
        options: [
        "std::endl is platform-independent, while '\n' may vary between platforms.",
        "std::endl is used in file operations, while '\n' is used in console output.",
        "std::endl inserts a newline and flushes the output buffer, while '\n' only inserts a newline.",
        "'\n' is faster because it doesn't flush the buffer."
        ]
        },
        
        {
        numb: 13,
        question: "What is the purpose of the 'constexpr' specifier in C++?",
        answer: "To declare that the value of a variable or function can be evaluated at compile time.",
        options: [
        "To ensure a variable remains constant throughout the program.",
        "To declare that the value of a variable or function can be evaluated at compile time.",
        "To improve performance by executing code at runtime.",
        "To declare constant expressions in template metaprogramming."
        ]
        },
        
        {
        numb: 14,
        question: "What is 'copy elision' in C++?",
        answer: "An optimization technique where unnecessary copying of objects is avoided.",
        options: [
        "A technique to deep copy objects.",
        "An error that occurs when an object is not properly copied.",
        "A feature that automatically generates copy constructors.",
        "An optimization technique where unnecessary copying of objects is avoided."
        ]
        },
        
        {
        numb: 15,
        question: "What are 'rvalue references' used for in C++?",
        answer: "To enable move semantics and more efficient object passing.",
        options: [
        "To create references that can be reassigned.",
        "To pass large objects to functions more efficiently.",
        "To enable move semantics and more efficient object passing.",
        "To reference temporary objects in memory."
        ]
        },
        
        {
        numb: 16,
        question: "What is 'decltype' used for in C++?",
        answer: "To determine the type of an expression at compile time.",
        options: [
        "To declare the type of a variable explicitly.",
        "To detect and handle type-related exceptions.",
        "To determine the type of an expression at compile time.",
        "To define a new type based on an existing one."
        ]
        },
        
        {
        numb: 17,
        question: "What is a 'trailing return type' and when is it used in C++?",
        answer: "A syntax for specifying the return type of a function after its parameter list, used for complex type deductions.",
        options: [
        "A default return type used when a function doesn't explicitly return a value.",
        "A syntax for specifying the return type of a function after its parameter list, used for complex type deductions.",
        "A technique for optimizing function return time.",
        "A method for specifying multiple return types."
        ]
        },
        
        {
        numb: 18,
        question: "In C++, what is the purpose of the 'override' specifier?",
        answer: "To indicate that a member function is intended to override a base class virtual function.",
        options: [
        "To change the default behavior of an inherited method.",
        "To indicate that a member function is intended to override a base class virtual function.",
        "To explicitly declare a function as virtual in derived classes.",
        "To prevent a member function from being overridden in further derived classes."
        ]
        },
        
        {
        numb: 19,
        question: "What is 'std::forward' used for in C++?",
        answer: "To perfectly forward an argument to another function, preserving its value category.",
        options: [
        "To pass arguments to a function in a FIFO manner.",
        "To improve the performance of function argument passing.",
        "To perfectly forward an argument to another function, preserving its value category.",
        "To convert lvalue references to rvalue references."
        ]
        },
        
        {
        numb: 20,
        question: "What is 'type punning' in C++ and why is it generally avoided?",
        answer: "Using a data type in a way that is not consistent with its intended use, often leading to undefined behavior.",
        options: [
        "Changing the type of a variable at runtime, which is not supported in C++.",
        "Using a data type in a way that is not consistent with its intended use, often leading to undefined behavior.",
        "A technique for optimizing memory usage by overlapping data structures.",
        "The process of converting one user-defined type to another."
        ]
        }

];