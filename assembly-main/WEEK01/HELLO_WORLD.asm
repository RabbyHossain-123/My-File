




ORG 100H
JMP START

MSG:    DB "HELLO WORLD", 0Dh, 0Ah, 24h
MSG1:   DB "My Name is MAZUMDER, AKM MOSHIUR RAHMAN", 0Dh, 0Ah, 24h

START:  MOV DX, MSG
        MOV ah, 09h ;THIS 2LINES IS USED FOR PRINTING 
        INT 21h
        
        MOV DX, MSG1
        MOV ah, 09h
        INT 21h
        
        
        MOV ah, 0
        INT 16h
        RET