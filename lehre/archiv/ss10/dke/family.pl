parent(pam,bob).
parent(tom,bob).
parent(tom,liz).
parent(bob,ann).
parent(bob,pat).
parent(pat,jim).

male(bob).
male(tom).
male(jim).

female(pam).
female(liz).
female(pat).
female(ann).

grandparent(X,Y) :- parent(X,Z), parent(Z,Y).

father(X,Y) :- parent(X,Y), male(X).

greatgrandfather(X,Y) :- father(X,Z), grandparent(Z,Y).

person(X) :- male(X).
person(X) :- female(X).

ancestor(X,X) :- person(X).
ancestor(X,Y) :- parent(X,Z), ancestor(Z,Y).

