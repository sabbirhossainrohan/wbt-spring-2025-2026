
let a = 5;
let b = 10;

console.log("Before swap:");
console.log("a =", a);
console.log("b =", b);


[a, b] = [b, a];

console.log("After swap:");
console.log("a =", a);
console.log("b =", b);



console.log("\nSquares from 1 to 10:");
for (let i = 1; i <= 10; i++) 
{
    console.log("Square of", i, "=", i * i);
}


let numbers = [12, 45, 7, 89, 34, 23];

let largest = Math.max(...numbers);

console.log("\nArray:", numbers);
console.log("Largest number:", largest);











