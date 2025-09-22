def math_form_view(x, y, z):
    firstOperation  = x + y
    secondOperation = firstOperation - z
    thirdOperation  = secondOperation * y
    fourthOperation = thirdOperation % z if z != 0 else None
    fifthOperation  = fourthOperation / z if (z != 0 and fourthOperation is not None) else None

    if fifthOperation is not None:
        final_result = fifthOperation + y + z
    else:
        final_result = None

    return {
        "x_val": x,
        "y_val": y,
        "z_val": z,
        "firstOperation": firstOperation,
        "secondOperation": secondOperation,
        "thirdOperation": thirdOperation,
        "fourthOperation": fourthOperation,
        "fifthOperation": fifthOperation,
        "final_result": final_result,
    }
