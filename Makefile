#make stuff!
#compiler = g++
CC=g++

#
# Wall for warnings
# use the c++11 standards for array stuff
#
CFLAGS=-Wall -std=c++11 

#main file = main.cpp
MAIN=main.cpp

CALC=calculate.cpp

all: $(MAIN)
	$(CC) $(CFLAGS) $(MAIN) $(CALCULATE) -o calc

main.o: $(MAIN)
	$(CC) $(CFLAGS) $(MAIN)

calculate.o: $(CALC)
	$(CC) $(CFLAGS) $(CALC)

clean:	
	rm -rf *o calc
