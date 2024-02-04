// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "What is the difference between 'String' and 'StringBuilder' in C#?",
        answer: "'String' is immutable, while 'StringBuilder' is mutable.",
        options: [
            "'String' is mutable, while 'StringBuilder' is immutable.",
            "'String' and 'StringBuilder' are the same.",
            "'String' is a value type, while 'StringBuilder' is a reference type.",
            "'String' is immutable, while 'StringBuilder' is mutable."
        ]
    },
    {
        numb: 2,
        question: "What is the purpose of the 'yield' keyword in C#?",
        answer: "To provide a value to the enumerator object or to signal the end of iteration in an iterator block.",
        options: [
            "To exit a loop immediately.",
            "To pause and resume a loop.",
            "To provide a value to the enumerator object or to signal the end of iteration in an iterator block.",
            "To generate a sequence of numbers."
        ]
    },
    {
        numb: 3,
        question: "In C#, which of the following correctly implements the Singleton pattern?",
        answer: "Using a private constructor and a static property to return an instance.",
        options: [
            "Using multiple constructors with different parameters.",
            "Using a public constructor and a static method.",
            "Using a private constructor and a static property to return an instance.",
            "Using an interface."
        ]
    },
    {
        numb: 4,
        question: "What is 'Dependency Injection' in C#?",
        answer: "A design pattern used to implement IoC, where the creation of dependencies is not done by the consumer.",
        options: [
            "A method to combine multiple classes into one.",
            "A design pattern used to implement IoC, where the creation of dependencies is not done by the consumer.",
            "A process of injecting values into fields.",
            "A feature of the C# compiler to optimize performance."
        ]
    },
    {
        numb: 5,
        question: "How does 'async' and 'await' in C# help in application development?",
        answer: "They enable writing asynchronous code that is readable and maintainable.",
        options: [
            "They make the application run faster.",
            "They enable writing asynchronous code that is readable and maintainable.",
            "They are used for multi-threading.",
            "They are used to optimize memory usage."
        ]
    },
    {
        numb: 6,
        question: "What is the difference between a 'class' and an 'interface' in C#?",
        answer: "A class is a blueprint for objects, while an interface is a contract for what a class can do.",
        options: [
            "An interface can contain implementation, while a class cannot.",
            "A class is a blueprint for objects, while an interface is a contract for what a class can do.",
            "A class supports multiple inheritance, while an interface does not.",
            "They are essentially the same in C#."
        ]
    },
    {
        numb: 7,
        question: "What does 'Expression-bodied members' feature in C# provide?",
        answer: "A concise way to implement members using lambda-like expressions.",
        options: [
            "A concise way to implement members using lambda-like expressions.",
            "A new type of collection.",
            "A way to write multi-threaded code.",
            "A method for handling exceptions."
        ]
    },
    {
        numb: 8,
        question: "What is the purpose of the 'out' keyword in method parameters in C#?",
        answer: "To pass an argument to a method by reference and allow the method to modify its value.",
        options: [
            "To indicate that the method will return more than one value.",
            "To pass an argument to a method by reference and allow the method to modify its value.",
            "To improve the performance of the method.",
            "To specify an optional parameter."
        ]
    },
    {
        numb: 9,
        question: "What is a 'deconstructor' in C#?",
        answer: "A method that deconstructs an object's state into separate variables, typically used with tuples.",
        options: [
            "A method that is automatically called when an object is garbage collected.",
            "A method that initializes an object's state.",
            "A method that deconstructs an object's state into separate variables, typically used with tuples.",
            "A method used in exception handling."
        ]
    },
    {
        numb: 10,
        question: "In C#, what is 'Extension Methods'?",
        answer: "Methods that allow adding new methods to existing types without modifying their source code.",
        options: [
            "Methods used to extend the functionality of an interface.",
            "Methods that allow adding new methods to existing types without modifying their source code.",
            "Methods that override existing methods in a class.",
            "Methods that are used exclusively in extension classes."
        ]
    },
    {
        numb: 11,
        question: "What is the purpose of the 'nameof' operator in C#?",
        answer: "To get the string name of a variable, type, or member.",
        options: [
            "To create a new name for a type.",
            "To check if a variable is null.",
            "To get the string name of a variable, type, or member.",
            "To generate a unique identifier for an object."
        ]
    },
    {
        numb: 12,
        question: "What is the difference between 'ref' and 'out' keywords in method parameters in C#?",
        answer: "'ref' requires that the variable be initialized before it is passed, while 'out' does not.",
        options: [
            "'ref' passes data in only one direction, while 'out' can pass data in both directions.",
            "'ref' is used for value types and 'out' is used for reference types.",
            "'ref' and 'out' are the same in functionality.",
            "'ref' requires that the variable be initialized before it is passed, while 'out' does not."
        ]
    },
    {
        numb: 13,
        question: "What is 'Entity Framework' in C#?",
        answer: "An ORM framework for .NET which allows developers to work with a database using .NET objects.",
        options: [
            "A UI framework for developing Windows applications.",
            "A library for building web applications.",
            "An ORM framework for .NET which allows developers to work with a database using .NET objects.",
            "A testing framework for C# applications."
        ]
    },
    {
        numb: 14,
        question: "How do you handle exceptions in C#?",
        answer: "Using try-catch-finally blocks.",
        options: [
            "Using if-else statements.",
            "Using the 'error' keyword.",
            "Using try-catch-finally blocks.",
            "By automatically logging them to a file."
        ]
    },
    {
        numb: 15,
        question: "What is the use of the 'Task' class in C#?",
        answer: "To represent an asynchronous operation and manage its state.",
        options: [
            "To schedule a method to run after a certain delay.",
            "To handle threading in an application.",
            "To represent an asynchronous operation and manage its state.",
            "To define a set of work to be executed."
        ]
    }

];