import sys

x = int(sys.argv[1])
y = int(sys.argv[2])
z = int(sys.argv[3])

firstOperation  = x + y
secondOperation = firstOperation - z
thirdOperation  = secondOperation * y
fourthOperation = thirdOperation % z
if z != 0:
    fifthOperation = fourthOperation / z
else:
    fifthOperation = None

# Final result
if fifthOperation is not None:
    final_result = fifthOperation + y + z
else:
    final_result = None

print(firstOperation)
print(secondOperation)
print(thirdOperation)
print(fourthOperation)
print(fifthOperation)
print(final_result)
print(x)
print(y)
print(z)