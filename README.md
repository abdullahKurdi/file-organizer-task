# Tamatem Technical Assignment

## Brief

In this task, I made a simplified file organizer application that has a small features to demonstrate, such as:

-   MVC Structure to show how I can implement the design patterns

-   Applying the PSR-4 autoloading standard enhances the organization and accessibility of classes within the project

## Table of Contents

-   [Getting Started](#getting-started)
    -   [Prerequisites](#prerequisites)
    -   [Installation](#installation)
  

## Getting Started

These instructions will help you clone and set up the project on your local machine for development and testing purposes.

### Prerequisites

-   [Git](https://git-scm.com/) (optional)
-   [Composer](https://getcomposer.org/)
-   [Local development server such as MAMP or XAMPP](https://www.apachefriends.org/download.html)


### Installation

1. Clone the repository:

    ```bash
    git clone git@github.com:abdullahKurdi/file-organizer-task.git
    ```

2. Install composer packages

    ```
    composer install
    ```

3. This command allows you to organize files within a specified folder by moving them into sub-folders based on their language. It's particularly useful for grouping files of different languages together for better organization.

    ```
    php tamatem.php organize [folderPath] [extension]

    ```

4. Go to public folder:
    ```
    cd public
    ```

5. Start the project server to view Folders and files structure 
    ```
    php -S localhost:8000 
    ```

