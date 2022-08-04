
.MODEL SMALL
.start 100h
.data
.code main
main proc
    mov ax, 0002h 
    mov bx, 0002H
    add ax, bx
    
                                            
    MOV DX, ax
    MOV ah, 09h  
    INT 21h
        
        
        
        
    MOV ah, 0
    INT 16h
       
    
    mov ah, 4ch
    int 21h
    main endp  
end main
        