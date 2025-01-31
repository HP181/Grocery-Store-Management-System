# Grocery Store Management System

## Overview
The Grocery Store Management System is a PHP-based web application that helps manage product inventory, sales, and orders. It uses JSON files for data storage and follows Object-Oriented Programming (OOP) principles to ensure modularity and maintainability.

## Project Structure

# Object-Oriented Programming (OOP) in PHP

Object-Oriented Programming (OOP) in PHP is a programming paradigm that uses objects and classes to organize and structure code. This approach makes it easier to manage and scale complex applications by organizing code into reusable components. OOP in PHP allows developers to model real-world entities and relationships in code, improving maintainability, flexibility, and reusability.

## Key Concepts of OOP in PHP

- **Class**: A blueprint for creating objects, containing properties (variables) and methods (functions).
- **Object**: An instance of a class.
- **Encapsulation**: The practice of hiding the internal state of an object and providing access only through public methods.
- **Inheritance**: The ability of a class to inherit properties and methods from another class.
- **Polymorphism**: The ability of different objects to respond to the same method call in different ways.
- **Abstraction**: Hiding the complex implementation details and exposing only the necessary functionality.

OOP in PHP helps developers write clean, modular, and reusable code, making it easier to maintain and extend applications.

## OOP Concepts Used
- **Classes**: Each class is responsible for managing the grocery store.
- - **Objects**: Each class is instantiated to create an object that manages the entire grocery store.
- **Encapsulation**: Each class has private properties with public methods to access them, ensuring data integrity.
- **Abstraction**: The `DataStorage` class abstracts the JSON file operations, making the storage logic reusable.


## Use Cases
- **Add New Product**: Users can add a new product by entering its name, price, and quantity.
- **View Product List**: Displays all available products and their details.
- **Search Products**: Users can search for specific products by name.
- **Update Inventory**: Allows modification of product quantities.
- **Delete Product**: Removes a product from inventory.
- **Place Order**: Users can place an order by selecting products and quantities.
- **Process Sale**: Updates inventory after an order is placed and records sales data.
- **Generate Sales Report**: Generates reports based on sales history.


This project is a PHP-based Inventory and Order Management System that allows users to manage products, place orders, and generate sales reports. The system consists of several pages to manage products, search for products, update quantities, place orders, and generate reports.

## Features

### 1. **Home Page**
   - **Add Product**: A form to add new products to the inventory.
   - **Show Products**: Displays a list of all available products in the inventory.

### 2. **Search Product**
   - Allows users to search products based on:
     - Product ID
     - Product Name
     - Price Range (min and max price)

### 3. **Update Product Page**
   - **Update Quantity**: Allows users to update the quantity of a specific product in the inventory.

### 4. **Place Order Page**
   - **Place Products Orders**: Allows users to place orders by selecting products and specifying the quantity they want to purchase.

### 5. **Sales Report**
   - **Generate Sales Report**: Generates a report showing sales details such as the total revenue, quantity sold, and other relevant data over a specified period.



## Installation and Running the System
### Prerequisites
- [XAMPP](https://www.apachefriends.org/) installed (if not already)

### Steps
1. Start **Apache** in XAMPP Control Panel.
2. Clone the repository:
   ```sh
   git clone https://github.com/HP181/Grocery-Store-Management-System.git
3. Move the cloned folder into the htdocs directory of XAMPP
4. Open your browser and visit
   http://localhost/grocery_store_management_system
