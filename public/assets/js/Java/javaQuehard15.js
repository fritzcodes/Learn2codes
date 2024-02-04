let questions = [
    {
        numb: 1,
        question: "What is the main difference between checked and unchecked exceptions in Java?",
        answer: "Checked exceptions are checked at compile-time, while unchecked exceptions are checked at runtime",
        options: [
            "Checked exceptions are fatal, unchecked exceptions are not",
            "Checked exceptions are checked at compile-time, while unchecked exceptions are checked at runtime",
            "Unchecked exceptions inherit from RuntimeException, checked exceptions do not",
            "Checked exceptions can be thrown by the JVM, unchecked exceptions cannot"
        ]
    },
    {
        numb: 2,
        question: "In Java, which keyword is used to access methods and properties of the parent class?",
        answer: "super",
        options: [
            "this",
            "super",
            "extends",
            "parent"
        ]
    },
    {
        numb: 3,
        question: "What is the purpose of the 'transient' keyword in Java?",
        answer: "To prevent a field from being serialized",
        options: [
            "To make a variable thread-safe",
            "To indicate that a variable is temporary",
            "To prevent a field from being serialized",
            "To allow a variable to be garbage collected"
        ]
    },
    {
        numb: 4,
        question: "What is the purpose of the 'volatile' keyword in Java?",
        answer: "To ensure that changes to a variable are visible to all threads",
        options: [
            "To lock a variable for synchronized access",
            "To make a variable immutable",
            "To indicate that a variable is not part of the object's serialized state",
            "To ensure that changes to a variable are visible to all threads"
        ]
    },
    {
        numb: 5,
        question: "In Java, what is the purpose of the 'finally' block in exception handling?",
        answer: "To execute code regardless of whether an exception is caught",
        options: [
            "To handle any uncaught exceptions",
            "To execute cleanup code, such as closing resources",
            "To execute code regardless of whether an exception is caught",
            "To retry the try block code after an exception occurs"
        ]
    },
    {
        numb: 6,
        question: "In Java, what does the 'synchronized' keyword ensure?",
        answer: "That only one thread can access the method or block at a time",
        options: [
            "That the method will not change any class variables",
            "That the method can only be called by one thread at a time",
            "That only one thread can access the method or block at a time",
            "That the method is atomic and cannot be interrupted"
        ]
    },
    {
        numb: 7,
        question: "Which method in the Object class is used to clone an object?",
        answer: "clone()",
        options: [
            "copy()",
            "clone()",
            "duplicate()",
            "replicate()"
        ]
    },
    {
        numb: 8,
        question: "What is the purpose of the 'static' keyword in Java?",
        answer: "To indicate that a member belongs to the class, rather than instances of the class",
        options: [
            "To make a method or variable immutable",
            "To optimize memory usage by sharing a method or variable among all instances",
            "To indicate that a member belongs to the class, rather than instances of the class",
            "To indicate that a method or variable can be accessed without creating an instance of the class"
        ]
    },
    {
        numb: 9,
        question: "In Java, what is 'method overloading'?",
        answer: "Defining multiple methods in the same class with the same name but different parameters",
        options: [
            "Replacing a method in a subclass with a new implementation",
            "Defining a method with the same signature in multiple interfaces",
            "Defining multiple methods in the same class with the same name but different parameters",
            "Changing the return type of a method in a subclass"
        ]
    },
    {
        numb: 10,
        question: "What is 'garbage collection' in the context of Java?",
        answer: "The process of automatically freeing memory by destroying objects that are no longer reachable",
        options: [
            "The process of deallocating unused memory spaces manually",
            "The process of automatically freeing memory by destroying objects that are no longer reachable",
            "The process of removing unused variables from the code",
            "The method of cleaning up unused resources like file handlers"
        ]
    },
    {
        numb: 11,
        question: "What is the difference between 'final', 'finally', and 'finalize' in Java?",
        answer: "'final' is a keyword to define constants, 'finally' is a block in exception handling, 'finalize' is a method called before an object is garbage collected",
        options: [
            "'final' is a keyword to define immutable classes, 'finally' is a keyword used in multithreading, 'finalize' is a method for finalizing class instances",
            "'final' is a keyword to define constants, 'finally' is a block in exception handling, 'finalize' is a method called before an object is garbage collected",
            "'final' is a method to finalize objects, 'finally' is a block that runs after a try-catch block, 'finalize' is a keyword used in class declarations",
            "'final' is a modifier for member variables, 'finally' is a method in Object class, 'finalize' is a block used in synchronization"
        ]
    },
    {
        numb: 12,
        question: "What is the significance of the 'implements' keyword in Java?",
        answer: "It is used by a class to implement an interface",
        options: [
            "It is used to inherit from a superclass",
            "It is used by a class to implement an interface",
            "It is used to include libraries in the program",
            "It is used to declare an abstract method"
        ]
    },
    {
        numb: 13,
        question: "How do you handle multiple exceptions in a single catch block in Java?",
        answer: "By using a multi-catch block with a pipe (|) character",
        options: [
            "By listing the exceptions separated by commas",
            "By using a multi-catch block with a pipe (|) character",
            "By nesting try-catch blocks inside each other",
            "Java does not support handling multiple exceptions in a single catch block"
        ]
    },
    {
        numb: 14,
        question: "What is the 'diamond problem' in Java?",
        answer: "A problem of multiple inheritance where a class inherits the same method from multiple parent classes",
        options: [
            "A problem with hash-based collections where different objects have the same hashcode",
            "A syntax error that occurs when using diamond operators",
            "A problem of memory leakage when objects are not properly garbage collected",
            "A problem of multiple inheritance where a class inherits the same method from multiple parent classes"
        ]
    },
    {
        numb: 15,
        question: "In Java, what is a 'daemon thread'?",
        answer: "A low-priority thread that runs in the background to perform tasks such as garbage collection",
        options: [
            "A thread that is always running in a Java application",
            "A high-priority thread that prevents the application from exiting",
            "A low-priority thread that runs in the background to perform tasks such as garbage collection",
            "A thread that can only be created by the JVM"
        ]
    }

];
