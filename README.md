# OtaF (One Time Access File)

OtaF is a web application designed for secure, temporary file sharing. Users can upload files that are assigned unique short URLs for one-time access. After a file is downloaded, it is automatically deleted from the server.

## Features

- **Secure File Upload**: Upload files up to 10MB with validation.
- **Unique Short URLs**: Each file receives a unique, randomly generated short URL.
- **One-Time Access**: Files are deleted from the server after download.
- **File Delete After Downloading** : The File will be deleted after it's downloaded.

## Technology Stack

- **Backend**: Laravel Framework
- **Frontend**: HTML, CSS, JavaScript
- **Storage**: Local storage with public access for file storage

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/mumadeit/OneTimeAccessFile.git
    ```
2. Navigate to the project directory:
    ```bash
    cd otaf
    ```
3. Install dependencies:
    ```bash
    composer install
    npm install
    ```
4. Set up your environment:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
5. Configure your `.env` file with the appropriate database and storage settings.

6. Run migrations:
    ```bash
    php artisan migrate
    ```

7. Start the development server:
    ```bash
    php artisan serve
    ```

## Usage

- **Upload a File**: Use the file upload endpoint to upload a file and receive a unique short URL.
- **Download a File**: Access the file using the short URL. The file will be automatically deleted from the server after download.

## License

This project is licensed under the MIT License.
