let questions = [
    {
        numb: 1,
        question: "In Java, what does the 'transient' keyword indicate?",
        answer: "A field should not be serialized",
        options: [
            "A field should not be serialized",
            "A field is temporarily stored in memory",
            "A field is transient in the database",
            "A field is undergoing transition"
        ]
    },
    {
        numb: 2,
        question: "What is 'heap pollution' in Java?",
        answer: "When a variable of a parameterized type refers to an object that is not of that parameterized type",
        options: [
            "When there's too much data in the heap memory",
            "When the heap memory is corrupted",
            "A type of memory leak in Java",
            "When a variable of a parameterized type refers to an object that is not of that parameterized type"
        ]
    },
    {
        numb: 3,
        question: "What is the 'diamond problem' in Java?",
        answer: "A situation where a class inherits from two interfaces with default methods of the same name",
        options: [
            "A problem with Java's garbage collection",
            "A conflict when merging two branches in version control",
            "A syntax issue with generic types",
            "A situation where a class inherits from two interfaces with default methods of the same name"
        ]
    },
    {
        numb: 4,
        question: "In Java, what is 'strictfp' used for?",
        answer: "To ensure floating-point operations are strictly conforming",
        options: [
            "To enforce strict formatting rules",
            "To ensure floating-point operations are strictly conforming",
            "To restrict file permissions",
            "To limit the scope of a variable"
        ]
    },
    {
        numb: 5,
        question: "What does 'System.gc()' do in Java?",
        answer: "Suggests that the JVM initiates garbage collection",
        options: [
            "Guarantees garbage collection",
            "Checks the health of the garbage collector",
            "Suggests that the JVM initiates garbage collection",
            "Clears the system cache"
        ]
    },
    {
        numb: 6,
        question: "What is the 'Observer' pattern in Java?",
        answer: "A design pattern where an object, called the subject, maintains a list of its dependents and notifies them of any state changes",
        options: [
            "A pattern for iterating over a collection of objects",
            "A design pattern for event handling",
            "A design pattern where an object, called the subject, maintains a list of its dependents and notifies them of any state changes",
            "A pattern for managing object creation"
        ]
    },
    {
        numb: 7,
        question: "In Java, what does the 'synchronized' keyword do?",
        answer: "Limits access to a block of code or method to only one thread at a time",
        options: [
            "Synchronizes data between a database and an application",
            "Keeps multiple variables in sync with each other",
            "Limits access to a block of code or method to only one thread at a time",
            "Ensures data consistency in a multi-threaded environment"
        ]
    },
    {
        numb: 8,
        question: "What is 'escape analysis' in Java?",
        answer: "An optimization technique where the JVM determines the scope of object references",
        options: [
            "A security check to prevent data leakage",
            "An optimization technique where the JVM determines the scope of object references",
            "A method for finding memory leaks",
            "Analyzing exception handling to ensure proper error escape"
        ]
    },
    {
        numb: 9,
        question: "What is 'daemon thread' in Java?",
        answer: "A low-priority thread that runs in the background to perform tasks such as garbage collection",
        options: [
            "A thread that runs with highest priority",
            "A malicious thread that can corrupt the application",
            "A thread that performs file system checks",
            "A low-priority thread that runs in the background to perform tasks such as garbage collection"
        ]
    },
    {
        numb: 10,
        question: "What are 'annotations' in Java?",
        answer: "Metadata that provides data about the code, which can be analyzed by the compiler and runtime",
        options: [
            "Comments that are ignored by the compiler",
            "Labels used for version control",
            "Metadata that provides data about the code, which can be analyzed by the compiler and runtime",
            "A way to document Java code"
        ]
    },
    {
        numb: 11,
        question: "What is 'garbage collection' in Java?",
        answer: "The process by which the JVM automatically removes unused objects from memory",
        options: [
            "Cleaning up unused Java packages from a project",
            "Manually deallocating memory in Java",
            "The process by which the JVM automatically removes unused objects from memory",
            "A debugging tool for finding memory leaks"
        ]
    },
    {
        numb: 12,
        question: "What is 'AOT (Ahead-of-Time) Compilation' in Java?",
        answer: "Compilation which converts Java bytecode into machine code before runtime",
        options: [
            "Compilation which converts Java bytecode into machine code before runtime",
            "A deprecated Java compilation method",
            "Compilation that happens simultaneously with the program execution",
            "A technique used for compiling large Java applications"
        ]
    },
    {
        numb: 13,
        question: "What is 'bytecode' in Java?",
        answer: "The intermediate code generated by the Java compiler from source code",
        options: [
            "The code written in the Java programming language",
            "A special code used for encoding characters",
            "The intermediate code generated by the Java compiler from source code",
            "An optimized form of machine code specific to Java"
        ]
    },
    {
        numb: 14,
        question: "In Java, what is 'Stack-Walking API'?",
        answer: "An API used for traversing the stack frames of the current thread",
        options: [
            "A tool for memory management",
            "An API used for traversing the stack frames of the current thread",
            "An API for monitoring the call stack for exceptions",
            "A debugging tool for inspecting the method call hierarchy"
        ]
    },
    {
        numb: 15,
        question: "What is 'memory leak' in Java?",
        answer: "A situation where unused objects are not properly cleaned up by the garbage collector, leading to a waste of memory",
        options: [
            "A failure in the JVM memory allocation",
            "A situation where unused objects are not properly cleaned up by the garbage collector, leading to a waste of memory",
            "A problem in Java's memory model",
            "An issue with the Java heap space"
        ]
    },
    {
        numb: 16,
        question: "What is 'class loading' in Java?",
        answer: "The process of reading binary data of a Java class and converting it into a Class object",
        options: [
            "Transferring Java classes over a network",
            "Saving class files to the hard drive",
            "The process of reading binary data of a Java class and converting it into a Class object",
            "Creating instances of a class"
        ]
    },
    {
        numb: 17,
        question: "What is 'double-checked locking' in Java?",
        answer: "A technique used to reduce synchronization overhead when implementing singletons",
        options: [
            "A technique for improving the performance of synchronized blocks",
            "A method of error checking in Java",
            "A security mechanism in Java applications",
            "A technique used to reduce synchronization overhead when implementing singletons"
        ]
    },
    {
        numb: 18,
        question: "What is 'JVM Tuning'?",
        answer: "The process of optimizing the performance of the Java Virtual Machine",
        options: [
            "Adjusting the Java syntax for better performance",
            "The process of writing more efficient Java code",
            "The process of optimizing the performance of the Java Virtual Machine",
            "A tool for upgrading the JVM"
        ]
    },
    {
        numb: 19,
        question: "What is 'reflection' in Java?",
        answer: "The ability of a program to analyze and modify its own structure and behavior at runtime",
        options: [
            "A method for creating Java objects",
            "The ability of a program to analyze and modify its own structure and behavior at runtime",
            "A debugging technique in Java",
            "A feature for implementing user interfaces"
        ]
    },
    {
        numb: 20,
        question: "In Java, what is 'concurrency'?",
        answer: "The ability to execute multiple threads and processes simultaneously",
        options: [
            "The ability to execute multiple threads and processes simultaneously",
            "The state of being in agreement with Java standards",
            "A pattern for synchronizing code execution",
            "A Java framework for building web applications"
        ]
    },
    {
        numb: 21,
        question: "What is 'Java Memory Model'?",
        answer: "An abstraction that defines how threads interact through memory",
        options: [
            "A tool for memory management in Java",
            "An abstraction that defines how threads interact through memory",
            "A model of the physical memory in a Java system",
            "A Java API for memory optimization"
        ]
    },
    {
        numb: 22,
        question: "What is 'serialization' in Java?",
        answer: "The process of converting an object into a byte stream",
        options: [
            "The process of converting an object into a byte stream",
            "Writing data to the database",
            "Creating a visual representation of Java classes",
            "Saving the state of an object to a file"
        ]
    },
    {
        numb: 23,
        question: "What is 'Java Native Interface (JNI)'?",
        answer: "An interface in the Java platform that allows Java code to interoperate with applications and libraries written in other languages",
        options: [
            "A special version of Java for native applications",
            "An interface for managing Java installations",
            "An interface in the Java platform that allows Java code to interoperate with applications and libraries written in other languages",
            "A networking interface in Java"
        ]
    },
    {
        numb: 24,
        question: "What is 'JavaBeans'?",
        answer: "A reusable software component model in Java for building complex objects from simple components",
        options: [
            "A Java library for backend development",
            "A reusable software component model in Java for building complex objects from simple components",
            "A framework for building Java web applications",
            "A collection of utility classes in Java"
        ]
    },
    {
        numb: 25,
        question: "What is 'type erasure' in Java?",
        answer: "The process where the Java compiler removes generic type information during compilation",
        options: [
            "A security feature in Java",
            "The process of removing data types from variables",
            "A method for clearing variables from memory",
            "The process where the Java compiler removes generic type information during compilation"
        ]
    },
    {
        numb: 26,
        question: "What is 'autoboxing' in Java?",
        answer: "The automatic conversion between primitive types and their corresponding object wrapper classes",
        options: [
            "A feature for automatically generating Java code",
            "The automatic conversion between primitive types and their corresponding object wrapper classes",
            "A memory optimization technique",
            "A method for packaging multiple objects into a single unit"
        ]
    },
    {
        numb: 27,
        question: "What is 'varargs' in Java?",
        answer: "A feature that allows a method to accept a variable number of arguments",
        options: [
            "A type of variable",
            "A feature that allows a method to accept a variable number of arguments",
            "A Java library for working with arrays",
            "A method for variably allocating memory"
        ]
    },
    {
        numb: 28,
        question: "What is 'Java Flight Recorder'?",
        answer: "A tool for collecting diagnostic and profiling data about a running Java application",
        options: [
            "A tool for collecting diagnostic and profiling data about a running Java application",
            "A Java framework for building flight simulation software",
            "A logging tool for Java applications",
            "A Java API for managing record data"
        ]
    },
    {
        numb: 29,
        question: "What is 'Java Mission Control'?",
        answer: "A set of tools for managing, monitoring, profiling, and troubleshooting Java applications",
        options: [
            "A Java framework for game development",
            "A set of tools for managing, monitoring, profiling, and troubleshooting Java applications",
            "A Java API for space exploration simulations",
            "A project management tool for Java projects"
        ]
    },
    {
        numb: 30,
        question: "What is 'Java Module System'?",
        answer: "A feature introduced in Java 9 for modularizing Java applications",
        options: [
            "A Java library for system operations",
            "A feature introduced in Java 9 for modularizing Java applications",
            "A tool for building modular user interfaces",
            "A Java API for working with file systems"
        ]
    }

];
