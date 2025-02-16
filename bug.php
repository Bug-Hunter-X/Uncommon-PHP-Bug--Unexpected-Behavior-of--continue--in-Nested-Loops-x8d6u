function myFunction() {
  for (let i = 0; i < 10; i++) {
    if (i === 5) {
      continue; // Skip the rest of the loop for this iteration
    }
    console.log(i);
  }
}

myFunction(); // Outputs 0, 1, 2, 3, 4, 6, 7, 8, 9