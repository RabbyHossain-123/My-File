
;Q: declare two variable, initial them, add them and store the added value to a third variable.



ORG 100H
JMP START

;X, Y variable initialized, C is uninitialized thus "?" is used 

X    DW 1234H   ;hexadecimal number    //16 bit used hence "DW" else we'd have uesd "DB"
Y    DW 6456H
C    DW ?       ;uninitialized - store the added value

START:  MOV AX, X   ;AX, BX high register used due to the 16 bit(DW)

        MOV BX, Y 
        
        ;MOV CX, C
        
        ;ADD CX, AX
        
        ADD AX, BX 
        
        MOV C, AX
        
        

        
        
        