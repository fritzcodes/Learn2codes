// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "What is the output of the following code snippet?\n\n```cpp\nint x = 10;\nint& ref = x;\nref = 20;\nstd::cout << x;\n```",
        answer: "20",
        options: [
            "10",
            "20",
            "x",
            "Error"
        ]
    },
    {
        numb: 2,
        question: "Which of the following correctly describes RAII in C++?",
        answer: "Resource Acquisition Is Initialization",
        options: [
            "Resource Allocation Is Initialization",
            "Resource Acquisition Is Initialization",
            "Return Allocation If Initialized",
            "Return Acquisition If Initialized"
        ]
    },
    {
        numb: 3,
        question: "What is a dangling pointer in C++?",
        answer: "A pointer that points to a memory location that has been deallocated",
        options: [
            "A pointer that has not been initialized",
            "A pointer that points to a memory location that has been deallocated",
            "A pointer that is pointing to NULL",
            "A pointer that is used after the function call is over"
        ]
    },
    {
        numb: 4,
        question: "Which of the following is true about a pure virtual function in C++?",
        answer: "It must be overridden in any derived class",
        options: [
            "It can have a definition in the base class",
            "It can only be declared in abstract classes",
            "It is used to declare default behavior",
            "It must be overridden in any derived class"
        ]
    },
    {
        numb: 5,
        question: "What does placement new in C++ do?",
        answer: "Constructs an object on a pre-allocated buffer",
        options: [
            "Allocates memory in a specific memory location",
            "Constructs an object on a pre-allocated buffer",
            "Allocates new memory and then copies existing object data",
            "Creates a new object in a specific class"
        ]
    },
    {
        numb: 6,
        question: "In C++, what is the effect of declaring a destructor virtual?",
        answer: "Ensures proper cleanup if a base class pointer pointing to a derived class object is deleted",
        options: [
            "Prevents the class from being instantiated",
            "Makes all member functions virtual",
            "Allows for dynamic binding of the destructor",
            "Ensures proper cleanup if a base class pointer pointing to a derived class object is deleted"
        ]
    },
    {
        numb: 7,
        question: "Which of these is not a standard exception derived from std::exception?",
        answer: "std::thread_error",
        options: [
            "std::runtime_error",
            "std::invalid_argument",
            "std::bad_alloc",
            "std::thread_error"
        ]
    },
    {
        numb: 8,
        question: "What is the purpose of the explicit keyword in C++?",
        answer: "To prevent implicit conversions and copy-initializations",
        options: [
            "To define explicit operator overloading",
            "To declare explicitly sized data types",
            "To ensure that a class can only be instantiated explicitly",
            "To prevent implicit conversions and copy-initializations"
        ]
    },
    {
        numb: 9,
        question: "What is the issue with having a function throw an exception in its destructor?",
        answer: "It can lead to undefined behavior if another exception is already being handled",
        options: [
            "It's not allowed by the C++ standard",
            "It causes a memory leak",
            "It can lead to undefined behavior if another exception is already being handled",
            "It terminates the program immediately"
        ]
    },
    {
        numb: 10,
        question: "In C++, which of the following is a correct way to declare a 'constexpr' function?",
        answer: "constexpr int square(int n) { return n * n; }",
        options: [
            "const int square(int n) { return n * n; }",
            "constexpr int square(int n) { return n * n; }",
            "inline int square(int n) { return n * n; }",
            "virtual int square(int n) { return n * n; }"
        ]
    },
    {
        numb: 11,
        question: "In C++, which of the following statements about dynamic_cast is true?",
        answer: "It can be used for safe downcasting in the class hierarchy.",
        options: [
            "It is used to cast any pointer type to void pointer.",
            "It performs a compile-time cast that is never checked at runtime.",
            "It can be used for safe downcasting in the class hierarchy.",
            "It can change the type of a variable during runtime."
        ]
    },
    {
        numb: 12,
        question: "What does the 'explicit' keyword prevent in C++?",
        answer: "Implicit conversions and copy-initialization.",
        options: [
            "Inheritance of a class.",
            "Implicit conversions and copy-initialization.",
            "Overloading of operators.",
            "Virtual function overriding."
        ]
    },
    {
        numb: 13,
        question: "Which of the following is a characteristic of a pure virtual function in C++?",
        answer: "It makes the class abstract.",
        options: [
            "It is a function that has no definition.",
            "It can be called directly with an object.",
            "It makes the class abstract.",
            "It is a function defined in a derived class."
        ]
    },
    {
        numb: 14,
        question: "What is the primary difference between 'std::endl' and '\\n' in C++?",
        answer: "'std::endl' flushes the output buffer, whereas '\\n' only inserts a newline.",
        options: [
            "'std::endl' causes a program crash if not used properly, '\\n' does not.",
            "'std::endl' can only be used with std::cout, '\\n' can be used with any stream.",
            "'std::endl' flushes the output buffer, whereas '\\n' only inserts a newline.",
            "There is no difference; they are interchangeable."
        ]
    },
    {
        numb: 15,
        question: "What is the outcome of using dynamic_cast on a pointer that cannot be successfully cast?",
        answer: "It returns nullptr",
        options: [
            "It throws an exception",
            "It returns nullptr",
            "The program terminates",
            "It returns a pointer to a different, unrelated type"
        ]
    },
    {
        numb: 16,
        question: "In C++, which operator can be overloaded but not inherited?",
        answer: "Assignment operator (=)",
        options: [
            "Assignment operator (=)",
            "Equality operator (==)",
            "Subtraction operator (-)",
            "Less than operator (<)"
        ]
    },
    {
        numb: 17,
        question: "What is the primary issue with using raw pointers for memory management in C++?",
        answer: "Risk of memory leaks and dangling pointers",
        options: [
            "Increased execution time of the program",
            "Risk of memory leaks and dangling pointers",
            "Automatic garbage collection is not possible",
            "Pointers do not work well with polymorphism"
        ]
    },
    {
        numb: 18,
        question: "Which of the following is not a characteristic of C++ Standard Template Library (STL) iterators?",
        answer: "They are used to perform arithmetic operations on containers",
        options: [
            "They can be used to access elements in a container",
            "They are used to perform arithmetic operations on containers",
            "Different containers provide different types of iterators",
            "Iterators abstract the container type"
        ]
    },
    {
        numb: 19,
        question: "In C++, what is 'placement new' used for?",
        answer: "Creating an object in a pre-allocated memory buffer",
        options: [
            "Creating a new object at a specified memory location",
            "Allocating memory dynamically for an array",
            "Creating an object in a pre-allocated memory buffer",
            "Invoking a constructor of an existing object"
        ]
    },
    {
        numb: 20,
        question: "What is the main use of a pure virtual function in C++?",
        answer: "To create an abstract class",
        options: [
            "To force derived classes to implement the function",
            "To provide default behavior in a base class",
            "To create an abstract class",
            "To define a function that cannot be overridden"
        ]
    }

];