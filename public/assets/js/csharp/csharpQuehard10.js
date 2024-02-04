// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "What is 'Expression-bodied members' feature in C#?",
        answer: "A feature that allows methods, properties, and other members to be defined using lambda-like syntax.",
        options: [
            "A feature that allows methods, properties, and other members to be defined using lambda-like syntax.",
            "A special type of expression used in LINQ queries.",
            "A way to write anonymous methods in C#.",
            "A syntax for creating expression trees."
        ]
    },
    {
        numb: 2,
        question: "What is the purpose of 'Span<T>' in C#?",
        answer: "A type providing a representation of contiguous memory regions.",
        options: [
            "A collection type that allows spanning multiple data sources.",
            "A type providing a representation of contiguous memory regions.",
            "A way to define a range of values in a collection.",
            "A feature for memory management in unsafe code."
        ]
    },
    {
        numb: 3,
        question: "How does 'async' and 'await' handle exceptions?",
        answer: "Exceptions are captured and placed on the returned Task object.",
        options: [
            "Exceptions are automatically logged and suppressed.",
            "Exceptions are captured and placed on the returned Task object.",
            "Exceptions cause immediate program termination.",
            "Exceptions must be handled within the async method."
        ]
    },
    {
        numb: 4,
        question: "What is a 'covariant return type' in C#?",
        answer: "The ability of a method to return a type that is derived from the original declared return type.",
        options: [
            "A return type that can vary depending on the method's input parameters.",
            "A feature that allows changing the return type of an overridden method in a derived class.",
            "The ability of a method to return a type that is derived from the original declared return type.",
            "A return type that can only be determined at runtime."
        ]
    },
    {
        numb: 5,
        question: "What is the purpose of 'Span<T>' in C#?",
        answer: "To provide a type-safe and memory-efficient representation of contiguous regions of arbitrary memory.",
        options: [
            "To represent a time span.",
            "To manage memory allocation in unsafe contexts.",
            "To provide a type-safe and memory-efficient representation of contiguous regions of arbitrary memory.",
            "To span multiple threads for parallel execution."
        ]
    },
    {
        numb: 6,
        question: "In C#, what is the 'stackalloc' keyword used for?",
        answer: "Allocating memory on the stack rather than the heap.",
        options: [
            "To allocate a fixed-size stack.",
            "To allocate memory on the stack rather than the heap.",
            "To define a stack data structure.",
            "To allocate memory dynamically."
        ]
    },
    {
        numb: 7,
        question: "What is 'expression-bodied member' syntax in C#?",
        answer: "A concise syntax for implementing members using lambda expressions.",
        options: [
            "A syntax for writing regular expressions.",
            "A way to declare members using SQL-like expressions.",
            "A concise syntax for implementing members using lambda expressions.",
            "A feature used for computed properties."
        ]
    },
    {
        numb: 8,
        question: "What is the use of 'ref struct' in C#?",
        answer: "To define a value type that must be stack-allocated and cannot escape the local scope.",
        options: [
            "To pass structures by reference.",
            "To define a reference type that behaves like a structure.",
            "To reference external struct definitions.",
            "To define a value type that must be stack-allocated and cannot escape the local scope."
        ]
    },
    {
        numb: 9,
        question: "What is 'placement new' in C++?",
        answer: "Creating an object in a pre-allocated buffer.",
        options: [
            "A new feature in the latest C++ standard.",
            "Creating an object in a pre-allocated buffer.",
            "Allocating memory for a new object.",
            "Constructing a new object with default placement."
        ]
    },
    {
        numb: 10,
        question: "What does the 'mutable' keyword do in C++?",
        answer: "Allows a member of an object to be modified even if the object is const.",
        options: [
            "Prevents a class member from being modified.",
            "Marks a variable as changeable.",
            "Allows a member of an object to be modified even if the object is const.",
            "Indicates that a member variable can change asynchronously."
        ]
    },


];