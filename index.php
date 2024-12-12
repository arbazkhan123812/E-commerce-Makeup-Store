<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Site</title>
    <style>
        /* Reset and global styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        /* Navbar styles */
        nav {
            background-color: #D33B33;
            color: white;
            width: 100%;
            padding: 1rem 0;
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        nav .container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 1rem;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 1rem;
            font-size: 1.1rem;
        }

        nav a:hover {
            color: #ffcc00;
        }

        /* Main content styles */
        .hero {
            margin-top: 5rem;
            text-align: center;
            padding: 2rem;
        }

        .hero h1 {
            font-size: 3rem;
            color: #6200ea;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 2rem;
        }

        .hero a {
            text-decoration: none;
            color: white;
            background-color: #D33B33;
            padding: 0.8rem 1.5rem;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .hero a:hover {
            background-color: #45009d;
        }

        /* Footer styles */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem 0;
            margin-top: auto;
            width: 100%;
        }

        footer a {
            color: #ffcc00;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            nav .container {
                flex-direction: column;
            }

            nav a {
                margin: 0.5rem 0;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <nav>
        <div class="container">
            <a href="/AptProject/Admin">Admin</a>
            <a href="/AptProject/home">Shopping Site</a>
        </div>
    </nav>

    <div class="hero">
        <h1>Welcome to Our Shopping Site</h1>
        <p>Your one-stop shop for the best products at unbeatable prices. Shop now and experience the difference!</p>
        <a href="/AptProject/home">Start Shopping</a>
    </div>

    <footer>
        <p>&copy; 2024 Shopping Site. All rights reserved. <a href="#">Privacy Policy</a></p>
    </footer>
</body>
</html>
