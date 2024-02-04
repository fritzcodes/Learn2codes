let questions = [
    {
        numb: 1,
        question: "What happens when a thread's interrupt() method is called while the thread is in a waiting or sleeping state?",
        answer: "InterruptedException is thrown",
        options: [
            "The thread continues to wait or sleep",
            "The thread immediately exits",
            "InterruptedException is thrown",
            "The interrupt call is ignored"
        ]
    },
    {
        numb: 2,
        question: "Which method is called internally by the JVM when a Java program is run?",
        answer: "main()",
        options: [
            "start()",
            "init()",
            "run()",
            "main()"
        ]
    },
    {
        numb: 3,
        question: "What is the result of attempting to compile and run a Java program with a missing main method?",
        answer: "A runtime error stating 'NoSuchMethodError: main'",
        options: [
            "A compile-time error",
            "A runtime error stating 'NoSuchMethodError: main'",
            "The program runs but does nothing",
            "A runtime error stating 'NullPointerException'"
        ]
    },
    {
        numb: 4,
        question: "In Java, which of these is a correct way to create an immutable object?",
        answer: "Declare the class as final and all its fields as private and final, and do not provide setters",
        options: [
            "Declare all methods as static",
            "Make all fields public and final",
            "Declare the class as abstract",
            "Declare the class as final and all its fields as private and final, and do not provide setters"
        ]
    },
    {
        numb: 5,
        question: "What is the significance of the hashCode() and equals() methods in Java?",
        answer: "They are used to maintain the contract with the hash-based collections like HashMap",
        options: [
            "They are used to improve the performance of collection operations",
            "They are used to define unique identifiers for objects",
            "They are used to maintain the contract with the hash-based collections like HashMap",
            "They are only required for multithreading purposes"
        ]
    },
    {
        numb: 6,
        question: "How does Java achieve platform independence?",
        answer: "By using the bytecode format and the JVM",
        options: [
            "Through the use of a pointer-free environment",
            "By using the bytecode format and the JVM",
            "Through dynamic typing",
            "By automatically compiling code to machine code"
        ]
    },
    {
        numb: 7,
        question: "What is the purpose of the Java Native Interface (JNI)?",
        answer: "To allow Java code to interact with native applications and libraries written in other languages",
        options: [
            "To optimize Java code performance",
            "To allow Java code to interact with native applications and libraries written in other languages",
            "To provide an interface for Java applications to interact with databases",
            "To enable Java applications to run on different platforms without modification"
        ]
    },
    {
        numb: 8,
        question: "What is the default layout manager for a JPanel in Swing?",
        answer: "FlowLayout",
        options: [
            "BorderLayout",
            "FlowLayout",
            "GridLayout",
            "BoxLayout"
        ]
    },
    {
        numb: 9,
        question: "In the context of Java memory management, what is the PermGen space?",
        answer: "A memory space for storing the metadata of classes and methods",
        options: [
            "A space for temporary variables",
            "A memory space for storing the metadata of classes and methods",
            "The heap space for object storage",
            "A special memory space for garbage collection"
        ]
    },
    {
        numb: 10,
        question: "Which of the following is true about a serialVersionUID in Java serialization?",
        answer: "It is used to ensure that the same class (version) is used during serialization and deserialization",
        options: [
            "It is an identifier used to version the Java Virtual Machine",
            "It is a unique ID given to each Java thread",
            "It is a memory address where the object is serialized",
            "It is used to ensure that the same class (version) is used during serialization and deserialization"
        ]
    }

];
