






ORG 100H
JMP START

MSG:    DB "HELLO", 0Dh, 0Ah, 24h
MSG1:   DB 48h, 45h, 4ch, 4ch, 4fh, 0ah, 0dh, 24h ; ASCII value of HELLO

START:  MOV DX, MSG
        MOV ah, 09h ;THIS NEXT 2LINES IS USED FOR PRINTING 
        INT 21h
        
        MOV DX, MSG1
        MOV ah, 09h   ;THIS NEXT 2LINES IS USED FOR PRINTING
        INT 21h
        
        
        MOV ah, 0
        INT 16h
        RET