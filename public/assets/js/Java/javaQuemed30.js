let questions = [
    {
        numb: 1,
        question: "What is the purpose of the 'static' keyword in Java?",
        answer: "To indicate that a method or variable belongs to the class, rather than instances of it",
        options: [
            "To make variables changeable",
            "To save memory",
            "To indicate that a method or variable belongs to the class, rather than instances of it",
            "To make a method final"
        ]
    },
    {
        numb: 2,
        question: "Which of these is not a valid way to create an instance of a class?",
        answer: "ClassName obj = ClassName();",
        options: [
            "ClassName obj = new ClassName();",
            "ClassName obj = ClassName.create();",
            "ClassName obj = ClassName();",
            "ClassName obj = new ClassName;"
        ]
    },
    {
        numb: 3,
        question: "What is the size of a float variable in Java?",
        answer: "32 bits",
        options: [
            "16 bits",
            "32 bits",
            "64 bits",
            "128 bits"
        ]
    },
    {
        numb: 4,
        question: "In Java, which of these access specifiers has the most restrictive access?",
        answer: "private",
        options: [
            "public",
            "private",
            "protected",
            "default"
        ]
    },
    {
        numb: 5,
        question: "What is the default value of a static variable in Java?",
        answer: "It depends on the type of the variable",
        options: [
            "null",
            "0",
            "false",
            "It depends on the type of the variable"
        ]
    },
    {
        numb: 6,
        question: "Which of these is used to handle exceptions in Java?",
        answer: "try-catch block",
        options: [
            "throw",
            "throws",
            "try-catch block",
            "error handling method"
        ]
    },
    {
        numb: 7,
        question: "What is a Constructor in Java?",
        answer: "A special method used to initialize objects",
        options: [
            "A method to destroy an object",
            "A static method",
            "A final method",
            "A special method used to initialize objects"
        ]
    },
    {
        numb: 8,
        question: "Which of these is not a core concept of OOP (Object-Oriented Programming)?",
        answer: "Inheritance",
        options: [
            "Encapsulation",
            "Inheritance",
            "Polymorphism",
            "Recursion"
        ]
    },
    {
        numb: 9,
        question: "What does 'JVM' stand for in the context of Java?",
        answer: "Java Virtual Machine",
        options: [
            "Java Variable Memory",
            "Java Virtual Method",
            "Java Virtual Machine",
            "Java Verified Method"
        ]
    },
    {
        numb: 10,
        question: "Which of these is not a type of constructor in Java?",
        answer: "Final constructor",
        options: [
            "Default constructor",
            "Parameterized constructor",
            "Copy constructor",
            "Final constructor"
        ]
    },
    {
        numb: 11,
        question: "What is Garbage Collection in Java?",
        answer: "A process by which the JVM reclaims memory from objects not in use",
        options: [
            "A way to clean up unused code",
            "A memory leak prevention mechanism",
            "A process by which the JVM reclaims memory from objects not in use",
            "A debugging tool for memory management"
        ]
    },
    {
        numb: 12,
        question: "In Java, 'System.out.println()' is often used for what purpose?",
        answer: "To print messages to the standard output",
        options: [
            "To read input from the user",
            "To send output to a file",
            "To print messages to the standard output",
            "To debug code"
        ]
    },
    {
        numb: 13,
        question: "Which method must be implemented by a class implementing the Runnable interface?",
        answer: "run()",
        options: [
            "start()",
            "run()",
            "execute()",
            "perform()"
        ]
    },
    {
        numb: 14,
        question: "What is the return type of a method that does not return any value?",
        answer: "void",
        options: [
            "null",
            "void",
            "0",
            "No return type"
        ]
    },
    {
        numb: 15,
        question: "What is the correct way to create an array in Java?",
        answer: "int[] arr = new int[5];",
        options: [
            "int arr[] = new int[5];",
            "int arr[] = new int(5);",
            "int[] arr = new int[5];",
            "int arr[] = {1, 2, 3, 4, 5};"
        ]
    },
    {
        numb: 16,
        question: "Which of these is a valid package name in Java?",
        answer: "com.example.myapp",
        options: [
            "com-example-myapp",
            "123app",
            "com.example.myapp",
            "com!example!myapp"
        ]
    },
    {
        numb: 17,
        question: "What is polymorphism in Java?",
        answer: "The ability of a variable, function, or object to take on multiple forms",
        options: [
            "The process of using multiple classes together",
            "The ability of a variable, function, or object to take on multiple forms",
            "The ability to create new classes based on existing classes",
            "The ability of a method to perform a single action in different ways"
        ]
    },
    {
        numb: 18,
        question: "Which of these keywords is used to define a package in Java?",
        answer: "package",
        options: [
            "package",
            "import",
            "class",
            "extends"
        ]
    },
    {
        numb: 19,
        question: "What is an interface in Java?",
        answer: "A reference type in Java, similar to a class, that can contain only constants, method signatures, default methods, static methods, and nested types",
        options: [
            "A way to implement multiple inheritances",
            "A reference type in Java, similar to a class, that can contain only constants, method signatures, default methods, static methods, and nested types",
            "A class that is used to create objects",
            "A type of constructor"
        ]
    },
    {
        numb: 20,
        question: "What is encapsulation in Java?",
        answer: "Encapsulating the data (variables) and code acting on the data (methods) together as a single unit",
        options: [
            "Encapsulating the data (variables) and code acting on the data (methods) together as a single unit",
            "The process of converting code into machine language",
            "The ability of an object to take many forms",
            "The mechanism of linking a method with an object it will affect"
        ]
    },
    {
        numb: 21,
        question: "Which keyword is used to inherit a class in Java?",
        answer: "extends",
        options: [
            "implements",
            "extends",
            "inherits",
            "super"
        ]
    },
    {
        numb: 22,
        question: "What is the purpose of the 'final' keyword in Java?",
        answer: "To indicate that a variable, method, or class cannot be modified or inherited",
        options: [
            "To make sure a variable remains constant",
            "To complete the execution of a method",
            "To indicate that a variable, method, or class cannot be modified or inherited",
            "To finalize the creation of an object"
        ]
    },
    {
        numb: 23,
        question: "Which of these is not a loop structure in Java?",
        answer: "repeat-until",
        options: [
            "for",
            "while",
            "do-while",
            "repeat-until"
        ]
    },
    {
        numb: 24,
        question: "What is the base class of all classes in Java?",
        answer: "Object",
        options: [
            "Main",
            "Object",
            "Class",
            "Base"
        ]
    },
    {
        numb: 25,
        question: "What does the '@Override' annotation in Java indicate?",
        answer: "The method is overriding a method from a superclass",
        options: [
            "The method is being replaced by a new implementation",
            "The method cannot be overridden in the future",
            "The method is static",
            "The method is overriding a method from a superclass"
        ]
    },
    {
        numb: 26,
        question: "What does 'JDK' stand for in Java?",
        answer: "Java Development Kit",
        options: [
            "Java Development Key",
            "Java Direct Kit",
            "Java Design Kit",
            "Java Development Kit"
        ]
    },
    {
        numb: 27,
        question: "In Java, what is the default value of an object reference defined at the class level?",
        answer: "null",
        options: [
            "0",
            "null",
            "undefined",
            "false"
        ]
    },
    {
        numb: 28,
        question: "Which keyword is used for creating a new instance of an object in Java?",
        answer: "new",
        options: [
            "new",
            "create",
            "alloc",
            "init"
        ]
    },
    {
        numb: 29,
        question: "What is the main use of an abstract class in Java?",
        answer: "To provide a base for subclasses to extend and implement the abstract methods",
        options: [
            "To create objects",
            "To declare constants",
            "To provide a base for subclasses to extend and implement the abstract methods",
            "To group classes together"
        ]
    },
    {
        numb: 30,
        question: "What is the process of defining more than one method in a class differentiated by method signature?",
        answer: "Method Overloading",
        options: [
            "Method Overriding",
            "Method Overloading",
            "Polymorphism",
            "Encapsulation"
        ]
    }

];
