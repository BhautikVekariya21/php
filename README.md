# PHP

## Table of Contents
- [Overview](#overview)
- [Directory Structure](#directory-structure)
- [File Descriptions](#file-descriptions)
  - [Basic](#basic)
  - [Functions](#functions)
  - [Loops](#loops)
  - [Arrays](#arrays)
  - [Forms](#forms)
  - [Errors](#errors)
  - [Database](#database)
  - [Object-Oriented Programming (OOP)](#object-oriented-programming-oop)
- [How to Clone and Run the Project](#how-to-clone-and-run-the-project)
- [References](#references)

---

## Overview
This project provides a comprehensive guide to learning and implementing PHP through practical examples and organized scripts. Each directory focuses on a specific topic in PHP, ranging from basics to advanced concepts like database handling and object-oriented programming.

---

## Directory Structure
```
php/
├── basic/
│   ├── hello_world.php
│   ├── user_input.php
│   ├── variables.php
│   ├── data_types.php
├── functions/
│   ├── basic_functions.php
│   ├── return_statements.php
│   ├── recursive_function.php
├── loops/
│   ├── for_loops.php
│   ├── while_loops.php
│   ├── foreach_loops.php
├── arrays/
│   ├── associative_arrays.php
│   ├── array_operations.php
│   ├── multidimensional_arrays.php
├── forms/
│   ├── basic_form.php
│   ├── file_upload.php
│   ├── multiple_file_upload.php
├── errors/
│   ├── error_handling.php
│   ├── custom_exceptions.php
│   ├── try_catch.php
├── database/
│   ├── crud_operations.php
│   ├── db_connection.php
│   ├── prepared_statements.php
```

---

## File Descriptions

### Basic
- **hello_world.php**: Introduces the `echo` and `print` statements to display output.
- **user_input.php**: Demonstrates handling user input via forms and the `$_POST` and `$_GET` superglobals.
- **variables.php**: Covers variable declaration, scope, and usage.
- **data_types.php**: Explains PHP data types like strings, integers, arrays, and objects.

### Functions
- **basic_functions.php**: Introduces user-defined functions and parameter passing.
- **return_statements.php**: Explains how to return values from functions.
- **recursive_function.php**: Demonstrates recursive function implementation with examples like factorial calculation.

### Loops
- **for_loops.php**: Covers `for` loops with examples.
- **while_loops.php**: Explains `while` and `do-while` loops with practical use cases.
- **foreach_loops.php**: Demonstrates iterating over arrays with `foreach`.

### Arrays
- **associative_arrays.php**: Introduces associative arrays and their usage.
- **array_operations.php**: Covers operations like sorting, merging, and slicing arrays.
- **multidimensional_arrays.php**: Explains multi-dimensional arrays with examples like matrices.

### Forms
- **basic_form.php**: Demonstrates form creation and handling user input.
- **file_upload.php**: Explains single file upload handling with validations.
- **multiple_file_upload.php**: Demonstrates handling multiple file uploads.

### Errors
- **error_handling.php**: Introduces PHP error handling mechanisms like `try-catch` blocks.
- **custom_exceptions.php**: Explains creating and throwing custom exceptions.
- **try_catch.php**: Demonstrates the usage of `try`, `catch`, and `finally` blocks.

### Database
- **crud_operations.php**: Demonstrates Create, Read, Update, and Delete operations with MySQL.
- **db_connection.php**: Covers connecting to a MySQL database using `mysqli` and `PDO`.
- **prepared_statements.php**: Explains secure SQL queries using prepared statements.

### Object-Oriented Programming (OOP)
Includes detailed examples of classes, objects, inheritance, and encapsulation. 
Refer to the [GitHub repository](https://github.com/BhautikVekariya21/php) for more examples and implementations.

---

## How to Clone and Run the Project
1. Clone the repository:
   ```bash
   git clone https://github.com/BhautikVekariya21/php.git
   ```
2. Navigate to the project directory:
   ```bash
   cd php
   ```
3. Set up a local PHP server:
   ```bash
   php -S localhost:8000
   ```
4. Open `http://localhost:8000` in your browser.

---

## References
- [PHP Official Documentation](https://www.php.net/docs.php)
- Examples inspired by real-world applications and practical use cases.
