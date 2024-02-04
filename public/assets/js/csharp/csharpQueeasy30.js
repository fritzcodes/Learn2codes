// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "Which of the following access modifiers in C# makes a member accessible only within its own class?",
        answer: "private",
        options: [
            "public",
            "protected",
            "internal",
            "private"
        ]
    },
    {
        numb: 2,
        question: "What is the correct syntax for declaring a variable in C#?",
        answer: "int myVar;",
        options: [
            "int myVar;",
            "declare myVar as integer;",
            "integer myVar;",
            "var myVar = int;"
        ]
    },
    {
        numb: 3,
        question: "Which of the following is the correct way to create an object in C#?",
        answer: "MyClass obj = new MyClass();",
        options: [
            "MyClass obj = new MyClass();",
            "new MyClass obj;",
            "MyClass obj = MyClass();",
            "create MyClass obj;"
        ]
    },
    {
        numb: 4,
        question: "What is the output of 'Console.WriteLine(4 + 5 * 3);' in C#?",
        answer: "19",
        options: [
            "27",
            "15",
            "19",
            "13"
        ]
    },
    {
        numb: 5,
        question: "What does the 'continue' keyword do in a loop in C#?",
        answer: "Skips the current iteration and continues with the next iteration.",
        options: [
            "Stops the loop and exits.",
            "Skips the loop entirely.",
            "Pauses the loop temporarily.",
            "Skips the current iteration and continues with the next iteration."
        ]
    },
    {
        numb: 6,
        question: "What is the purpose of the 'this' keyword in C#?",
        answer: "Refers to the current instance of the class.",
        options: [
            "To declare static methods.",
            "To pass a method as a parameter.",
            "Refers to the current instance of the class.",
            "To declare external methods."
        ]
    },
    {
        numb: 7,
        question: "What are 'delegates' in C#?",
        answer: "Type-safe function pointers.",
        options: [
            "Classes that can be used to implement inheritance.",
            "Arrays of objects.",
            "Type-safe function pointers.",
            "Keywords used to handle exceptions."
        ]
    },
    {
        numb: 8,
        question: "Which of the following is a valid way to define a method that returns an integer in C#?",
        answer: "public int CalculateSum() { return 0; }",
        options: [
            "int public CalculateSum() { return 0; }",
            "public int CalculateSum() { return 0; }",
            "function CalculateSum(): int { return 0; }",
            "int CalculateSum() returns { return 0; }"
        ]
    },
    {
        numb: 9,
        question: "What is the purpose of the 'finally' block in a try-catch statement in C#?",
        answer: "To execute code after the try and catch blocks, regardless of whether an exception was thrown.",
        options: [
            "To run code only if no exception is thrown.",
            "To execute a final check of the code.",
            "To clean up resources.",
            "To execute code after the try and catch blocks, regardless of whether an exception was thrown."
        ]
    },
    {
        numb: 10,
        question: "What is an 'enum' in C#?",
        answer: "A distinct type that consists of a set of named constants.",
        options: [
            "A method to iterate through collections.",
            "A type of class.",
            "A special type of array.",
            "A distinct type that consists of a set of named constants."
        ]
    },
    {
        numb: 11,
        question: "Which keyword is used to declare an abstract class in C#?",
        answer: "abstract",
        options: [
            "abstract",
            "virtual",
            "sealed",
            "static"
        ]
    },
    {
        numb: 12,
        question: "What is the correct way to declare a read-only field in C#?",
        answer: "public readonly int myField;",
        options: [
            "readonly public int myField;",
            "public readonly int myField;",
            "public const int myField;",
            "int readonly myField;"
        ]
    },
    {
        numb: 13,
        question: "Which collection type in C# automatically resizes as you add or remove elements?",
        answer: "List",
        options: [
            "Array",
            "Queue",
            "Stack",
            "List"
        ]
    },
    {
        numb: 14,
        question: "What does the '?' symbol represent in C#?",
        answer: "Nullable type",
        options: [
            "Ternary operator",
            "Conditional operator",
            "Null coalescing operator",
            "Nullable type"
        ]
    },
    {
        numb: 15,
        question: "How do you handle multiple exceptions in C#?",
        answer: "Using multiple catch blocks",
        options: [
            "Using multiple try blocks",
            "Using a single catch block with multiple types",
            "Using multiple catch blocks",
            "By separating exceptions with commas in one catch block"
        ]
    },
    {
        numb: 16,
        question: "What is the correct syntax to create a property with both a get and set accessor in C#?",
        answer: "public int MyProperty { get; set; }",
        options: [
            "public int MyProperty { get; set; }",
            "public int MyProperty(get; set;)",
            "int MyProperty { get; set; }",
            "public int getMyProperty() { return value; } public void setMyProperty(int value) { this.value = value; }"
        ]
    },
    {
        numb: 17,
        question: "Which keyword is used to specify that a class or a member is defined outside the current assembly in C#?",
        answer: "extern",
        options: [
            "external",
            "extern",
            "export",
            "outside"
        ]
    },
    {
        numb: 18,
        question: "What is boxing in C#?",
        answer: "Converting a value type to a reference type.",
        options: [
            "Placing a value type within a try-catch block.",
            "Encapsulating data within a class.",
            "Converting a reference type to a value type.",
            "Converting a value type to a reference type."
        ]
    },
    {
        numb: 19,
        question: "What is the purpose of the 'static' keyword in C#?",
        answer: "To declare a member that belongs to the type itself, rather than to any specific object.",
        options: [
            "To ensure that a method can't be overridden.",
            "To declare a member that belongs to the type itself, rather than to any specific object.",
            "To initialize variables at runtime.",
            "To create a constant value."
        ]
    },
    {
        numb: 20,
        question: "What is LINQ in C#?",
        answer: "A set of features that extends powerful query capabilities to the language syntax.",
        options: [
            "A library for handling external data.",
            "A set of features that extends powerful query capabilities to the language syntax.",
            "A method to optimize performance.",
            "A built-in database engine."
        ]
    },
    {
        numb: 21,
        question: "Which of the following is the correct syntax to declare an interface in C#?",
        answer: "interface IMyInterface { }",
        options: [
            "class IMyInterface { }",
            "interface IMyInterface { }",
            "model IMyInterface { }",
            "new IMyInterface { }"
        ]
    },
    {
        numb: 22,
        question: "What is a 'struct' in C#?",
        answer: "A value type that is typically used to encapsulate small groups of related variables.",
        options: [
            "A reference type that can be used to define complex data structures.",
            "A value type that is typically used to encapsulate small groups of related variables.",
            "A built-in data type for handling text.",
            "A mechanism to define properties in a class."
        ]
    },
    {
        numb: 23,
        question: "Which of the following is true about constructors in C#?",
        answer: "They are special methods called when an instance of a class is created.",
        options: [
            "They are used to destroy objects.",
            "They must always return a value.",
            "They are special methods called when an instance of a class is created.",
            "They are automatically called before a program starts."
        ]
    },
    {
        numb: 24,
        question: "What is the purpose of 'using' statement in C#?",
        answer: "To include the namespaces containing classes, methods, and other elements in the program.",
        options: [
            "To declare variables.",
            "To include the namespaces containing classes, methods, and other elements in the program.",
            "To handle exceptions.",
            "To create aliases for namespaces."
        ]
    },
    {
        numb: 25,
        question: "What does the 'var' keyword do in C#?",
        answer: "Declares a variable with implicit typing.",
        options: [
            "Declares a variable that can store any type of data.",
            "Declares a variable with explicit typing.",
            "Declares a variable with implicit typing.",
            "Creates a variant object."
        ]
    },
    {
        numb: 26,
        question: "What is the main difference between a class and a struct in C#?",
        answer: "Classes are reference types and structs are value types.",
        options: [
            "Structs are only used in the .NET framework.",
            "Classes can have methods, but structs cannot.",
            "Classes are reference types and structs are value types.",
            "There is no difference."
        ]
    },
    {
        numb: 27,
        question: "What is the purpose of the 'as' keyword in C#?",
        answer: "Performs safe type-casting.",
        options: [
            "Declares a variable as asynchronous.",
            "Performs safe type-casting.",
            "Marks a block of code as critical.",
            "Defines an alias for a namespace."
        ]
    },
    {
        numb: 28,
        question: "Which of the following correctly declares a two-dimensional array in C#?",
        answer: "int[,] myArray;",
        options: [
            "int[][] myArray;",
            "int[] myArray;",
            "int[,] myArray;",
            "array[int, int] myArray;"
        ]
    },
    {
        numb: 29,
        question: "What is the purpose of the 'override' keyword in C#?",
        answer: "To modify a method, property, indexer, or event defined in the base class.",
        options: [
            "To define a new implementation of a method in a derived class.",
            "To prevent further overriding in derived classes.",
            "To modify a method, property, indexer, or event defined in the base class.",
            "To declare a method that can't be overridden."
        ]
    },
    {
        numb: 30,
        question: "What is the output of 'Console.WriteLine(\"C#\".Length);'?",
        answer: "2",
        options: [
            "3",
            "2",
            "Error",
            "4"
        ]
    }

];