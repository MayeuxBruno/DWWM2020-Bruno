var num1=parseInt(prompt("Entrez un nombre :"));
var num2=parseInt(prompt("Entrez un nombre :"));
var operateur=prompt("entrez un opérateur (+,-,*,/) :");
switch (operateur)
{
    case "+":
        document.write(num1+num2);
        break;
    case "-":
        document.write(num1-num2);
        break;
    case "*":
        document.write(num1*num2);
        break;
    case "/":
        (num2==0)?document.write("Division par 0 impossible"): document.write(num1/num2);
        break;
    default:
        document.write("Opérateur non valide....");
}