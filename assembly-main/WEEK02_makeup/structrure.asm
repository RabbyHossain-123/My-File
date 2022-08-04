;write a program to print your name and ID. you must follow the program structure for assembly-
;LANGUAGE. Data must be declared in data segment                                          


.MODEL SMALL
.STACK 100H 

.DATA

myName:    DW "AKM MOSHIUR RAHMAN MAZUMDER", 0Ah,0Dh, 24h
myID:      DW "20-42619-1", 0Ah, 0Dh, 24h

.CODE MAIN

    MAIN PROC 
        
        MOV AX,@DATA
        MOV DS,AX
        
        LEA DX, myName
        MOV AH, 09h ;THIS 2LINES IS USED FOR PRINTING 
        INT 21h
        
        LEA DX, myID
        MOV AH, 09h
        INT 21h
        
    MAIN ENDP
    

END MAIN
        