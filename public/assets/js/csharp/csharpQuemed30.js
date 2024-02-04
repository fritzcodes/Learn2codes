// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "What is 'reflection' in C#?",
        answer: "The ability to inspect and modify the behavior of an object at runtime.",
        options: [
            "The process of translating source code into machine code.",
            "The ability to inspect and modify the behavior of an object at runtime.",
            "A feature for mirroring classes and methods.",
            "A technique for improving code readability."
        ]
    },
    {
        numb: 2,
        question: "What is a 'constructor' in C#?",
        answer: "A special method of a class that is called when an instance of the class is created.",
        options: [
            "A method that constructs the logic of the program.",
            "A special method of a class that is called when an instance of the class is created.",
            "A function that initializes static class members.",
            "A method used to serialize an object."
        ]
    },
    {
        numb: 3,
        question: "What is the difference between 'is' and 'as' operators in C#?",
        answer: "'is' checks if an object is of a certain type, 'as' converts the object to that type or returns null if conversion fails.",
        options: [
            "'is' casts an object to a specific type, 'as' checks for compatibility.",
            "'is' is used for type comparison, 'as' is used for type conversion.",
            "'is' checks if an object is of a certain type, 'as' converts the object to that type or returns null if conversion fails.",
            "There is no significant difference between 'is' and 'as'."
        ]
    },
    {
        numb: 4,
        question: "What is 'exception handling' in C#?",
        answer: "A way to handle errors or unusual conditions that occur during the execution of a program.",
        options: [
            "A way to handle errors or unusual conditions that occur during the execution of a program.",
            "The process of handling user input errors.",
            "A method for preventing runtime errors.",
            "A technique for logging errors."
        ]
    },
    {
        numb: 5,
        question: "What is an 'interface' in C#?",
        answer: "A contract that defines a set of methods and properties that the implementing class must adhere to.",
        options: [
            "A user interface element like a button or textbox.",
            "A contract that defines a set of methods and properties that the implementing class must adhere to.",
            "A way to interact with the operating system.",
            "A tool for connecting to databases."
        ]
    },
    {
        numb: 6,
        question: "What is 'polymorphism' in C#?",
        answer: "The ability of different types to be treated as the same type through a common interface.",
        options: [
            "The ability of a method to perform different tasks based on the input.",
            "The ability of different types to be treated as the same type through a common interface.",
            "Changing the behavior of an operator.",
            "A feature that allows classes to have multiple parents."
        ]
    },
    {
        numb: 7,
        question: "What is the purpose of 'event handlers' in C#?",
        answer: "To define actions that are executed in response to an event.",
        options: [
            "To monitor changes in application state.",
            "To handle system events like shutdown or sleep.",
            "To define actions that are executed in response to an event.",
            "To process user input events."
        ]
    },
    {
        numb: 8,
        question: "What is 'serialization' in C#?",
        answer: "The process of converting an object into a format that can be stored or transmitted.",
        options: [
            "The process of protecting data against unauthorized access.",
            "The process of converting an object into a format that can be stored or transmitted.",
            "The process of breaking down a string into its constituent characters.",
            "The process of assigning an object to a variable."
        ]
    },
    {
        numb: 9,
        question: "What is the purpose of the 'static' keyword in C#?",
        answer: "To indicate that a member belongs to the type itself rather than to any specific instance.",
        options: [
            "To prevent changes to a variable or method.",
            "To indicate that a member belongs to the type itself rather than to any specific instance.",
            "To optimize memory usage.",
            "To make a method or variable thread-safe."
        ]
    },
    {
        numb: 10,
        question: "What is 'dependency injection' in C#?",
        answer: "A technique where an object receives other objects that it depends on, rather than creating them itself.",
        options: [
            "A method of injecting data into an application.",
            "A technique where an object receives other objects that it depends on, rather than creating them itself.",
            "A security vulnerability in software.",
            "A way to add dependencies to a project."
        ]
    },
    {
        numb: 11,
        question: "What is the 'using' statement used for in C#?",
        answer: "To ensure that objects implementing IDisposable are disposed of properly.",
        options: [
            "To include namespaces in a file.",
            "To define aliases for types.",
            "To ensure that objects implementing IDisposable are disposed of properly.",
            "To create a new instance of a type."
        ]
    },
    {
        numb: 12,
        question: "What is 'LINQ' in C#?",
        answer: "A set of features for querying and manipulating data in a type-safe way.",
        options: [
            "A set of features for querying and manipulating data in a type-safe way.",
            "A language for interfacing with databases.",
            "A library for linear algebra computations.",
            "A protocol for linking objects together."
        ]
    },
    {
        numb: 13,
        question: "What are 'extension methods' in C#?",
        answer: "Methods that allow adding new methods to existing types without modifying them.",
        options: [
            "Methods that are only accessible in derived classes.",
            "Methods that allow adding new methods to existing types without modifying them.",
            "Special methods used for extending the functionality of interfaces.",
            "Methods that extend the execution time of an application."
        ]
    },
    {
        numb: 14,
        question: "What is 'lambda expression' in C#?",
        answer: "An anonymous function that can be used to create delegates or expression tree types.",
        options: [
            "A special syntax for loops.",
            "An operator used in mathematical expressions.",
            "An anonymous function that can be used to create delegates or expression tree types.",
            "A method for writing recursive algorithms."
        ]
    },
    {
        numb: 15,
        question: "What is 'Entity Framework' in C#?",
        answer: "An object-relational mapping framework for .NET.",
        options: [
            "A framework for building user interfaces.",
            "An object-relational mapping framework for .NET.",
            "A library for handling HTTP requests.",
            "A testing framework for .NET applications."
        ]
    },
    {
        numb: 16,
        question: "What is 'async/await' in C#?",
        answer: "A pattern for writing asynchronous code that appears synchronous.",
        options: [
            "Keywords for creating and managing threads.",
            "A pattern for writing asynchronous code that appears synchronous.",
            "Syntax for exception handling.",
            "A way to delay the execution of a method."
        ]
    },
    {
        numb: 17,
        question: "What are 'value types' and 'reference types' in C#?",
        answer: "Value types are stored on the stack and hold data directly, while reference types are stored on the heap and hold a reference to the data.",
        options: [
            "Value types are immutable, reference types are mutable.",
            "Value types are stored on the stack and hold data directly, while reference types are stored on the heap and hold a reference to the data.",
            "Value types can only be numeric, while reference types can be any type.",
            "There is no difference, they are used interchangeably."
        ]
    },
    {
        numb: 18,
        question: "What is 'garbage collection' in C#?",
        answer: "The process by which the runtime automatically releases memory that is no longer being used.",
        options: [
            "The process of cleaning up unused variables.",
            "The practice of optimizing code for performance.",
            "The process by which the runtime automatically releases memory that is no longer being used.",
            "A technique for handling errors."
        ]
    },
    {
        numb: 19,
        question: "What is the difference between 'public', 'private', and 'protected' access modifiers?",
        answer: "Public members are accessible everywhere, private members are accessible only within their declaring type, and protected members are accessible within their declaring type and its derived types.",
        options: [
            "There is no difference, they are used for readability.",
            "Public members are visible in the UI, private and protected are not.",
            "Public members are accessible everywhere, private members are accessible only within their declaring type, and protected members are accessible within their declaring type and its derived types.",
            "Public and protected members are accessible only within their namespace, private is accessible everywhere."
        ]
    },
    {
        numb: 20,
        question: "What is 'boxing' and 'unboxing' in C#?",
        answer: "Boxing is the process of converting a value type to a reference type, and unboxing is the reverse process.",
        options: [
            "Boxing is the process of encrypting data, and unboxing is decrypting it.",
            "Boxing is the process of packaging code, and unboxing is deploying it.",
            "Boxing is the process of converting a value type to a reference type, and unboxing is the reverse process.",
            "Boxing and unboxing are techniques for managing memory."
        ]
    },
    {
        numb: 21,
        question: "What is 'delegates' in C#?",
        answer: "Types that represent references to methods with a particular parameter list and return type.",
        options: [
            "Keywords for delegating tasks to different threads.",
            "Types that represent references to methods with a particular parameter list and return type.",
            "A way to call methods indirectly.",
            "Classes that handle events."
        ]
    },
    {
        numb: 22,
        question: "What is 'attributes' in C#?",
        answer: "Metadata added to code elements (classes, methods, properties) to specify additional information used by the compiler or runtime.",
        options: [
            "Properties of classes.",
            "Metadata added to code elements (classes, methods, properties) to specify additional information used by the compiler or runtime.",
            "Visual elements in a user interface.",
            "A way to define constants."
        ]
    },
    {
        numb: 23,
        question: "What is 'Nullable<T>' in C#?",
        answer: "A struct that encapsulates an optional value of a given type T.",
        options: [
            "A way to declare a variable that can be null.",
            "A struct that encapsulates an optional value of a given type T.",
            "A special type used for database operations.",
            "A class for handling null references."
        ]
    },
    {
        numb: 24,
        question: "What is the purpose of the 'yield' keyword in C#?",
        answer: "To provide a value to the enumerator object or signal the end of the iteration in iterator methods.",
        options: [
            "To interrupt the execution of a method.",
            "To allocate memory.",
            "To provide a value to the enumerator object or signal the end of the iteration in iterator methods.",
            "To pause and resume asynchronous operations."
        ]
    },
    {
        numb: 25,
        question: "What are 'anonymous types' in C#?",
        answer: "Class types that are automatically declared by the compiler and have properties inferred from the initialized members.",
        options: [
            "Types that are used for security purposes.",
            "Class types that are automatically declared by the compiler and have properties inferred from the initialized members.",
            "A way to define variables without specifying their type.",
            "Types used for anonymous methods."
        ]
    },
    {
        numb: 26,
        question: "What is the difference between 'struct' and 'class' in C#?",
        answer: "Structs are value types and are stored on the stack, classes are reference types and are stored on the heap.",
        options: [
            "There is no significant difference, they are used interchangeably.",
            "Structs are only used for small data structures, classes for larger ones.",
            "Structs are value types and are stored on the stack, classes are reference types and are stored on the heap.",
            "Structs can't have methods, classes can."
        ]
    },
    {
        numb: 27,
        question: "What is 'partial class' and 'partial method' in C#?",
        answer: "Partial classes allow splitting the definition of a class over multiple files, partial methods provide a way to define a method signature without an implementation.",
        options: [
            "Partial classes are incomplete classes that must be completed elsewhere, partial methods are methods that can only be partially implemented.",
            "Partial classes allow splitting the definition of a class over multiple files, partial methods provide a way to define a method signature without an implementation.",
            "Partial classes are classes that inherit partially from another class, partial methods are methods that are only partially overridden.",
            "They are deprecated features in C#."
        ]
    },
    {
        numb: 28,
        question: "What is 'dynamic' type in C#?",
        answer: "A data type that bypasses compile-time type checking and resolves type at runtime.",
        options: [
            "A type used for dynamic programming.",
            "A data type that changes based on the data it holds.",
            "A data type that bypasses compile-time type checking and resolves type at runtime.",
            "A synonym for 'var', which is used for type inference."
        ]
    },
    {
        numb: 29,
        question: "What are 'tuples' in C#?",
        answer: "Data structures that allow to store a fixed number of elements of different types.",
        options: [
            "A type of collection.",
            "Data structures that allow to store a fixed number of elements of different types.",
            "A feature for parallel programming.",
            "A method for grouping method parameters."
        ]
    },
    {
        numb: 30,
        question: "What is 'implicit' and 'explicit' conversion in C#?",
        answer: "Implicit conversion automatically converts a type to another compatible type, explicit conversion requires a cast to convert between incompatible types.",
        options: [
            "Implicit conversion is always safe, explicit conversion can lead to data loss.",
            "Implicit conversion can be done at runtime, explicit conversion is done at compile time.",
            "Implicit conversion automatically converts a type to another compatible type, explicit conversion requires a cast to convert between incompatible types.",
            "Implicit conversion is used for built-in types, explicit conversion is used for user-defined types."
        ]
    }

];