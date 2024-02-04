let questions = [
    {
        numb: 1,
        question: "What is 'Class.forName()' used for in Java?",
        answer: "It loads the class and returns the Class object associated with the class",
        options: [
            "It checks if a class exists",
            "It creates a new instance of a class",
            "It loads the class and returns the Class object associated with the class",
            "It returns the name of the class as a string"
        ]
    },
    {
        numb: 2,
        question: "In Java, what is a 'Marker Interface'?",
        answer: "An interface with no methods, used to indicate a special behavior to the implementing class",
        options: [
            "An interface that marks a class as serializable",
            "An interface used to mark specific methods for runtime processing",
            "An interface with only one method",
            "An interface with no methods, used to indicate a special behavior to the implementing class"
        ]
    },
    {
        numb: 3,
        question: "What is the 'Double Brace Initialization' in Java?",
        answer: "A technique to initialize an anonymous inner class with an instance initializer block",
        options: [
            "A technique for initializing arrays with double braces",
            "A technique to initialize an anonymous inner class with an instance initializer block",
            "A shorthand for initializing a Map with key-value pairs",
            "A method for quickly initializing objects with default values"
        ]
    },
    {
        numb: 4,
        question: "What is 'method hiding' in Java?",
        answer: "When a static method in a subclass has the same signature as a static method in the parent class",
        options: [
            "When a method in a subclass is made private",
            "When a static method in a subclass has the same signature as a static method in the parent class",
            "Using generics to obscure the method's parameter types",
            "A technique for securing sensitive methods from external access"
        ]
    },
    {
        numb: 5,
        question: "What is the difference between 'deep copy' and 'shallow copy' in Java?",
        answer: "Shallow copy copies the object's references, while deep copy copies all objects referenced",
        options: [
            "Shallow copy duplicates the object, deep copy duplicates the class",
            "Shallow copy is faster, while deep copy is slower",
            "Shallow copy copies the object's references, while deep copy copies all objects referenced",
            "Shallow copy is used for cloning, deep copy is used for serialization"
        ]
    },
    {
        numb: 6,
        question: "In Java, how is a 'weak reference' different from a normal reference?",
        answer: "A weak reference allows the object to be garbage-collected",
        options: [
            "A weak reference can be nullified by the JVM",
            "A weak reference does not need to be explicitly dereferenced",
            "A weak reference is automatically cleared when the object is no longer in use",
            "A weak reference allows the object to be garbage-collected"
        ]
    },
    {
        numb: 7,
        question: "What is the 'Phantom Reference' in Java?",
        answer: "A reference type that is enqueued after the garbage collector determines the referent is phantom reachable",
        options: [
            "A reference that exists only during the compile time",
            "A reference type that is enqueued after the garbage collector determines the referent is phantom reachable",
            "A special kind of weak reference",
            "A reference type used for memory management in JVM"
        ]
    },
    {
        numb: 8,
        question: "In Java, what is 'reflection' used for?",
        answer: "To inspect and manipulate classes, interfaces, fields, and methods at runtime",
        options: [
            "To inspect and manipulate classes, interfaces, fields, and methods at runtime",
            "To replicate the behavior of an object",
            "To create mirror images of class implementations",
            "To debug and test private methods of a class"
        ]
    },
    {
        numb: 9,
        question: "What is the 'Java Memory Model'?",
        answer: "A specification that describes how threads interact through memory",
        options: [
            "A model describing different types of memory in the JVM",
            "A tool for managing memory allocation in Java",
            "A specification that describes how threads interact through memory",
            "A framework for memory optimization in Java applications"
        ]
    },
    {
        numb: 10,
        question: "What is the purpose of the 'native' keyword in Java?",
        answer: "To indicate that a method is implemented in a language other than Java (usually C/C++)",
        options: [
            "To indicate that a method is a built-in feature of the JVM",
            "To enhance performance by using native code optimization",
            "To indicate that a method can be directly accessed by the hardware",
            "To indicate that a method is implemented in a language other than Java (usually C/C++)"
        ]
    },
    {
        numb: 11,
        question: "In Java, what is a 'class loader'?",
        answer: "A part of the JVM that loads classes into memory",
        options: [
            "A tool for dynamically loading and unloading classes at runtime",
            "A part of the JVM that loads classes into memory",
            "A class that helps in loading properties and resources",
            "A compiler utility for loading and compiling classes"
        ]
    },
    {
        numb: 12,
        question: "What is 'type erasure' in Java generics?",
        answer: "The process where the compiler removes generic type information after type checking",
        options: [
            "A feature that automatically determines the type of a generic class",
            "The process where the compiler removes generic type information after type checking",
            "A runtime exception related to generics",
            "The replacement of a generic type with its bound or Object if unbounded"
        ]
    },
    {
        numb: 13,
        question: "What are 'varargs' in Java?",
        answer: "A feature that allows a method to accept a variable number of arguments",
        options: [
            "Variables that can change types at runtime",
            "A shorthand for declaring multiple variables of the same type",
            "A feature that allows a method to accept a variable number of arguments",
            "Special types of variables for storing large arrays"
        ]
    },
    {
        numb: 14,
        question: "In Java, what is 'type inference'?",
        answer: "The Java compiler's ability to automatically determine the types of expressions",
        options: [
            "The process of converting one type to another",
            "The Java compiler's ability to automatically determine the types of expressions",
            "A runtime process that determines the actual type of an object",
            "A debugging tool to infer types of variables"
        ]
    },
    {
        numb: 15,
        question: "What is 'autoboxing' in Java?",
        answer: "The automatic conversion between primitive types and their corresponding object wrapper classes",
        options: [
            "Automatically boxing methods within a class",
            "The automatic conversion between primitive types and their corresponding object wrapper classes",
            "A feature that packages multiple objects into a single unit",
            "The process of optimizing object storage in memory"
        ]
    },
    {
        numb: 16,
        question: "In Java, what is 'string interning'?",
        answer: "A method of storing only one copy of each distinct string value",
        options: [
            "A method of synchronizing access to strings",
            "A technique for efficient string concatenation",
            "A method of storing only one copy of each distinct string value",
            "A design pattern used for creating strings"
        ]
    },
    {
        numb: 17,
        question: "What is 'dynamic method dispatch' in Java?",
        answer: "A mechanism by which a call to an overridden method is resolved at runtime",
        options: [
            "A technique for dispatching events to methods",
            "A mechanism by which a call to an overridden method is resolved at runtime",
            "A method of dynamically loading classes and invoking methods",
            "A way to dynamically allocate memory for method execution"
        ]
    },
    {
        numb: 18,
        question: "In Java, what is 'just-in-time (JIT) compilation'?",
        answer: "A process of converting Java bytecode into native machine code at runtime",
        options: [
            "A process of converting Java bytecode into native machine code at runtime",
            "A compilation technique that happens immediately after the code is written",
            "A debugging process that compiles code in real-time",
            "A method for compiling large programs in segments"
        ]
    },
    {
        numb: 19,
        question: "What is 'method overloading' in Java?",
        answer: "Defining multiple methods with the same name but different parameters",
        options: [
            "Changing the implementation of a method in a subclass",
            "Defining multiple methods with the same name but different parameters",
            "Increasing the visibility of a method in a subclass",
            "Replacing a method's code without changing its signature"
        ]
    },
    {
        numb: 20,
        question: "What is the 'volatile' keyword used for in Java?",
        answer: "To indicate that a variable's value will be modified by different threads",
        options: [
            "To prevent a variable from being serialized",
            "To make a variable immutable",
            "To indicate that a variable's value will be modified by different threads",
            "To ensure that a variable retains its value even after the method completes"
        ]
    }

];
