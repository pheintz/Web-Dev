#!/usr/bin/env python
# -*- coding: utf-8 -*-
#
#  Homework 8.py
#  
#  Copyright 2015 Patrick <lloyd@lappy>
#  
#  This program is free software; you can redistribute it and/or modify
#  it under the terms of the GNU General Public License as published by
#  the Free Software Foundation; either version 2 of the License, or
#  (at your option) any later version.
#  
#  This program is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU General Public License for more details.
#  
#  You should have received a copy of the GNU General Public License
#  along with this program; if not, write to the Free Software
#  Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
#  MA 02110-1301, USA.
#  
#  
import random

def rand():
	scramble = ""
	seed = random.uniform(0,100)
	random.seed(seed)
	colorList = ["red", "green", "yellow", "brown", 
	"orange", "cyan", "pink", "gold"]
	
	index = int(random.uniform(0,7))
	myColor = colorList[index]
	scramble = ''.join(random.sample(myColor,len(myColor)))
	while scramble == myColor:
		scramble = ''.join(random.sample(myColor,len(myColor)))
	print "%s" % scramble
	userColor = raw_input("What color is this? (or 'quit')\n>")
	if userColor == "quit":
		return "quit"
	if userColor==myColor:
		print "Correct!"
		return 1
	else:
		print "Sorry that's incorrect"	
		return 0
		
	
	
def __int__(self):
	return self;

def main():
	score = 0
	total = 0
	while score != "quit":
		score += rand()
		total += 1
		print "%i of %i correct" % (score, total)
	return 0

if __name__ == '__main__':
	main()
