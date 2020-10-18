<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" id="form">
        <input type="text" name="num1" placeholder="input number">
        <select id="select" name="select"> 
            <option name="value[]">+</option> 
            <option name="value[]">-</option>
            <option name="value[]">*</option>
            <option name="value[]">/</option>
        </select>
        <input type="text" name="num2" placeholder="input number">
        <input type="submit" id="btn" value="submit">
        <span id="res"></span>
    </form>


    <script>
    document.querySelector("#form").addEventListener("submit", getRes)


    

    async function getRes(event){
        event.preventDefault();
        let num1 =  Number(event.target.num1.value)
        let num2 =  Number(event.target.num2.value)
        console.log(num1, num2)
        let sel = event.target.select.value;
        const serv = await fetch(`server.php?num1=${num1}&num2=${num2}&sel=${sel}`)
        const response = await serv.text()
        document.querySelector("#res").innerText = "= " + response;
    }

    
    </script>
    
</body>
</html>

