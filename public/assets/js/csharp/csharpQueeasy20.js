// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "Which operator is used to concatenate two strings in C#?",
        answer: "+",
        options: [
            "*",
            "&",
            "+",
            "%"
        ]
    },
    {
        numb: 2,
        question: "What keyword is used to define a namespace in C#?",
        answer: "namespace",
        options: [
            "Namespace",
            "using",
            "package",
            "namespace"
        ]
    },
    {
        numb: 3,
        question: "What is the default value of a boolean variable in C#?",
        answer: "false",
        options: [
            "true",
            "0",
            "null",
            "false"
        ]
    },
    {
        numb: 4,
        question: "What does 'int' stand for in C#?",
        answer: "Integer",
        options: [
            "Internal",
            "Intrinsic",
            "Integral",
            "Integer"
        ]
    },
    {
        numb: 5,
        question: "What method is used to convert a string to an integer in C#?",
        answer: "int.Parse()",
        options: [
            "Convert.ToInt()",
            "int.Convert()",
            "int.Parse()",
            "Int32.Parse()"
        ]
    },
    {
        numb: 6,
        question: "Which of these is a correct way to declare an array in C#?",
        answer: "int[] myArray;",
        options: [
            "array int[] myArray;",
            "int myArray[];",
            "int[] myArray;",
            "int array[] myArray;"
        ]
    },
    {
        numb: 7,
        question: "What is the purpose of the 'static' keyword in C#?",
        answer: "To declare a member that belongs to the type itself rather than to a specific object.",
        options: [
            "To ensure that a variable retains its value between method calls.",
            "To declare a member that belongs to the type itself rather than to a specific object.",
            "To declare a method that cannot be overridden.",
            "To make a method available only within its class."
        ]
    },
    {
        numb: 8,
        question: "What does the 'void' keyword represent in a method declaration in C#?",
        answer: "The method does not return a value.",
        options: [
            "The method is empty.",
            "The method can return any type.",
            "The method returns null.",
            "The method does not return a value."
        ]
    },
    {
        numb: 9,
        question: "What is an 'if' statement used for in C#?",
        answer: "To execute a block of code based on a condition.",
        options: [
            "To define a variable.",
            "To execute a block of code multiple times.",
            "To execute a block of code based on a condition.",
            "To stop the execution of a loop."
        ]
    },
    {
        numb: 10,
        question: "What is the purpose of the 'try-catch' block in C#?",
        answer: "To handle exceptions that occur during program execution.",
        options: [
            "To test a block of code for performance.",
            "To handle exceptions that occur during program execution.",
            "To try different methods sequentially.",
            "To execute a block of code at least once."
        ]
    },
    {
        numb: 11,
        question: "Which method is automatically called when an object is created in C#?",
        answer: "Constructor",
        options: [
            "Main",
            "Constructor",
            "Initializer",
            "New"
        ]
    },
    {
        numb: 12,
        question: "How do you specify that a class inherits from another class in C#?",
        answer: "Using the ':' symbol",
        options: [
            "Using the 'extends' keyword",
            "Using the ':' symbol",
            "Using the 'implements' keyword",
            "Using the 'inherits' keyword"
        ]
    },
    {
        numb: 13,
        question: "What is the purpose of properties in C#?",
        answer: "To provide a flexible mechanism to read, write, or compute private fields.",
        options: [
            "To store data.",
            "To define methods.",
            "To provide a flexible mechanism to read, write, or compute private fields.",
            "To declare constants."
        ]
    },
    {
        numb: 14,
        question: "What is the output of 'Console.WriteLine(8 % 3);' in C#?",
        answer: "2",
        options: [
            "2.67",
            "2",
            "5",
            "11"
        ]
    },
    {
        numb: 15,
        question: "What does the 'foreach' statement do in C#?",
        answer: "Iterates over each element in a collection.",
        options: [
            "Executes a statement repeatedly until a condition is met.",
            "Iterates over each element in a collection.",
            "Filters elements based on a condition.",
            "Sorts a collection."
        ]
    },
    {
        numb: 16,
        question: "What is an 'interface' in C#?",
        answer: "A contract that defines a set of methods and properties that a class must implement.",
        options: [
            "A way to interact with the user.",
            "A contract that defines a set of methods and properties that a class must implement.",
            "A class that provides basic functionality to derived classes.",
            "A type of data structure."
        ]
    },
    {
        numb: 17,
        question: "What is the scope of a 'public' member in a C# class?",
        answer: "Accessible from any part of the program.",
        options: [
            "Accessible only within the class itself.",
            "Accessible only within the current assembly.",
            "Accessible from any part of the program.",
            "Accessible only within derived classes."
        ]
    },
    {
        numb: 18,
        question: "What is LINQ in C#?",
        answer: "A set of features that extends query capabilities to the .NET language syntax.",
        options: [
            "A database connectivity tool.",
            "A web framework.",
            "A set of features that extends query capabilities to the .NET language syntax.",
            "A unit testing framework."
        ]
    },
    {
        numb: 19,
        question: "Which of the following is a valid way to declare a method in C#?",
        answer: "public void MyMethod() {}",
        options: [
            "method MyMethod() {}",
            "void MyMethod() {}",
            "public void MyMethod() {}",
            "public method MyMethod() {}"
        ]
    },
    {
        numb: 20,
        question: "What are 'attributes' in C#?",
        answer: "A way to add metadata, such as compiler instructions and other information, to code.",
        options: [
            "A type of method.",
            "A way to store data.",
            "A way to add metadata, such as compiler instructions and other information, to code.",
            "A set of classes in the .NET Framework."
        ]
    }

];