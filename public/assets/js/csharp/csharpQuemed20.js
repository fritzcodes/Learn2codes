// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "What is LINQ in C#?",
        answer: "A set of features that extends powerful query capabilities to the language syntax of C#.",
        options: [
            "A database connectivity library.",
            "A JSON parsing tool.",
            "A set of features that extends powerful query capabilities to the language syntax of C#.",
            "A code obfuscation tool."
        ]
    },
    {
        numb: 2,
        question: "What is an abstract class in C#?",
        answer: "A class that cannot be instantiated and is typically used as a base class.",
        options: [
            "A class that provides complete functionality and can be modified by subclasses.",
            "A class that hides its implementation details.",
            "A class that cannot be instantiated and is typically used as a base class.",
            "A special class used for data storage."
        ]
    },
    {
        numb: 3,
        question: "What does the 'sealed' keyword do in C#?",
        answer: "Prevents a class from being inherited or a method from being overridden.",
        options: [
            "Ensures that a class can only have one instance.",
            "Prevents a class from being inherited or a method from being overridden.",
            "Seals the state of an object so it cannot be modified.",
            "Makes a method or property read-only."
        ]
    },
    {
        numb: 4,
        question: "What is the purpose of the 'var' keyword in C#?",
        answer: "To declare a variable with implicit typing, determined by the compiler.",
        options: [
            "To declare a constant value.",
            "To declare a variable that can store any type of data.",
            "To declare a variable with explicit typing.",
            "To declare a variable with implicit typing, determined by the compiler."
        ]
    },
    {
        numb: 5,
        question: "What is 'boxing' in C#?",
        answer: "The process of converting a value type to a reference type.",
        options: [
            "The process of encapsulating data.",
            "The process of converting a value type to a reference type.",
            "The process of serializing an object.",
            "A method of error handling."
        ]
    },
    {
        numb: 6,
        question: "What are extension methods in C#?",
        answer: "Methods that allow you to add new methods to an existing type without modifying the type.",
        options: [
            "Methods that are used to extend the functionality of collections.",
            "Methods that allow you to add new methods to an existing type without modifying the type.",
            "Methods that extend the life of an object.",
            "Static methods inside static classes."
        ]
    },
    {
        numb: 7,
        question: "What is a delegate in C#?",
        answer: "A type-safe function pointer that holds a reference to a method.",
        options: [
            "A special type of class used for data encapsulation.",
            "A type-safe function pointer that holds a reference to a method.",
            "A way to define a callback function.",
            "A class that is used to delegate tasks."
        ]
    },
    {
        numb: 8,
        question: "What is the 'dynamic' type in C#?",
        answer: "A data type that bypasses compile-time type checking and resolves type at runtime.",
        options: [
            "A type that automatically changes based on the data it is assigned.",
            "A data type that bypasses compile-time type checking and resolves type at runtime.",
            "A type used for dynamic programming techniques.",
            "A type that is defined at runtime."
        ]
    },
    {
        numb: 9,
        question: "What is 'method overloading' in C#?",
        answer: "Creating multiple methods with the same name but different signatures in the same class.",
        options: [
            "Replacing an existing method with a new method in a subclass.",
            "Creating multiple methods with the same name but different return types.",
            "Creating multiple methods with the same name but different signatures in the same class.",
            "Increasing the performance of a method."
        ]
    },
    {
        numb: 10,
        question: "What is the purpose of the 'using' statement in C#?",
        answer: "To ensure that the Dispose method is called on a resource when the scope is exited.",
        options: [
            "To import namespaces.",
            "To include external files.",
            "To declare a pointer type.",
            "To ensure that the Dispose method is called on a resource when the scope is exited."
        ]
    },
    {
        numb: 11,
        question: "What does 'lazy loading' mean in the context of C#?",
        answer: "Delaying the loading of an object or value until it is needed.",
        options: [
            "Reducing the memory usage of an application.",
            "Delaying the loading of an object or value until it is needed.",
            "Loading data in a non-blocking manner.",
            "A technique for optimizing performance."
        ]
    },
    {
        numb: 12,
        question: "What is 'Garbage Collection' in C#?",
        answer: "A process by which the runtime automatically reclaims memory occupied by unreachable objects.",
        options: [
            "A method for manually cleaning up resources.",
            "A library for managing application cache.",
            "A process by which the runtime automatically reclaims memory occupied by unreachable objects.",
            "A tool for detecting memory leaks."
        ]
    },
    {
        numb: 13,
        question: "What is the 'new' modifier used for in C#?",
        answer: "To hide an inherited member from a base class with a new implementation in a derived class.",
        options: [
            "To create a new instance of a type.",
            "To declare a variable for the first time.",
            "To ensure that a method is not overridden in a derived class.",
            "To hide an inherited member from a base class with a new implementation in a derived class."
        ]
    },
    {
        numb: 14,
        question: "What is an 'indexer' in C#?",
        answer: "A special type of property that allows a class or struct to be accessed like an array.",
        options: [
            "A tool for creating and managing database indexes.",
            "A property that automatically increments each time it is accessed.",
            "A method for sorting collections.",
            "A special type of property that allows a class or struct to be accessed like an array."
        ]
    },
    {
        numb: 15,
        question: "What are 'attributes' in C#?",
        answer: "Metadata added to code elements (classes, methods, properties) to provide additional information during runtime.",
        options: [
            "The variables defined in a class.",
            "The visual aspects of a UI control.",
            "Metadata added to code elements (classes, methods, properties) to provide additional information during runtime.",
            "Access modifiers like public, private, and protected."
        ]
    },
    {
        numb: 16,
        question: "What is the difference between 'struct' and 'class' in C#?",
        answer: "'struct' is a value type and 'class' is a reference type.",
        options: [
            "'struct' is used for small objects and 'class' for large ones.",
            "'struct' can have methods, but 'class' cannot.",
            "'struct' is a value type and 'class' is a reference type.",
            "There is no difference, they are used interchangeably."
        ]
    },
    {
        numb: 17,
        question: "What is a 'partial class' in C#?",
        answer: "A class whose definition can be split into multiple parts within the same assembly.",
        options: [
            "A class that is not fully implemented.",
            "A class used for partial method implementations.",
            "A class whose definition can be split into multiple parts within the same assembly.",
            "A class that inherits only part of a base class."
        ]
    },
    {
        numb: 18,
        question: "What is a 'tuple' in C#?",
        answer: "A data structure that holds a sequence of elements of different types.",
        options: [
            "A special type of array.",
            "A collection that allows only unique elements.",
            "A data structure that holds a sequence of elements of different types.",
            "A method for pairing two related values."
        ]
    },
    {
        numb: 19,
        question: "What does the 'yield' keyword do in C#?",
        answer: "Used in an iterator block to provide a value to the enumerator object or to signal the end of iteration.",
        options: [
            "Pauses the execution of a method and returns a value to the caller.",
            "Yields control to another thread or process.",
            "Used in an iterator block to provide a value to the enumerator object or to signal the end of iteration.",
            "Indicates that a method should return no value."
        ]
    },
    {
        numb: 20,
        question: "What is 'asynchronous programming' in C#?",
        answer: "Programming where operations can run independently of the main application thread, improving responsiveness.",
        options: [
            "Programming that runs at the same time as other functions.",
            "Programming where operations can run independently of the main application thread, improving responsiveness.",
            "A method of programming that delays the execution of certain parts of code.",
            "Writing code that automatically adjusts based on the number of available processors."
        ]
    }

];