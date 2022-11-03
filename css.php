

<style>
        
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-image: linear-gradient(135deg, black, #213647);
        }

        header {
            width: 100%;
            background-color: rgba(32 116 178 / 82%);
            display: flex;
            justify-content: space-around;
            align-items: center;
            color: white;
            font-family: sans-serif;
            font-weight: bold;
            padding: 2rem 0;
            margin-bottom: 3rem;
        }

        header .nav_bar ul {
            display: flex;
            gap: 1rem;
            list-style: none;
        }

        .container_form {
            display: flex;
            justify-content: center;
            width: 100%;
        }
        .container_form form {
            width: 100%;
            display: flex;
            justify-content: center;
        }
        .container_form form .min_container {
            background-color: rgba(32 116 178 / 82%);
            padding: 1rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 40%;
            justify-content: center;
            gap: 1rem;
            font-family: sans-serif;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
            border-radius: 5px;
        }
        .container_form form .min_container div {
            display: flex;
            flex-direction: column;
            gap: 5px;
            width: fit-content;
        }
        .container_form form .min_container div label {
            font-weight: bold;
            color: white;
        }
        .container_form form .min_container div input {
            width: 300px;
            border: 1px solid #ccc;
            padding: 10px 10px;
            border-radius: 5px;
            background-color: antiquewhite;
            outline: none;
        }

        .data .affichage ul li {
            border: 1px solid #ccc;
            padding: 2rem;
            color: white;
        }
        .data .affichage .btn {
            background : rgba(32 116 178 / 82%);
            color: white; padding: 15px 20px; outline: none; border: 1px solid #Ccc; font-weight: bold; margin-left: 2.5rem;
        }
    </style>