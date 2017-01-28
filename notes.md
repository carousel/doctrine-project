#IMPORTANT CONCEPTS RELATED TO DOCTRINE
-behavior/interaction first, state later
-annotations
-inheritance
-entity manager
-unit of work
-collections

#RELATIONS
-ManyToOne (owning side)
-OneToMany (inverse side)
-OneToOne (owning side is table with foreign key)
-ManyToMany (owning can be choosed)
-inverse side changes are ignored
-unidirectional (owning side/mappedBy)
-bidirectional (owning/mappedBy and inverse side/inversedBy)
    -ArrayCollection
-owning side check only
-self referencing
-@JoinColumn
-@JoinTable

#EMAMPLE ENTITY RELATIONS
-Room (rooms)
    -One Room To One Host
    -One Room To Many Guest
    -One Room To One RoomAddress
    -Many Room To Many Guest
    -Many Room To One Host
-RoomAddress(room_address)
    -One RoomAddress To One Room
-Host (hosts)
    -One Host To Many Room
-Guest(guests)
    -One Guest To Many Room

#CONCEPT OF ARRAY COLLECTION
-bidirectional relation
-owning side updated

