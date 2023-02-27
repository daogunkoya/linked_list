# Linked list

The  code is an implementation of a singly linked list in PHP.

A linked list is a linear data structure in which elements are not stored at contiguous memory locations. Instead, each element (node) of a linked list contains a reference to the next node in the list. A singly linked list is a type of linked list in which each node has a reference to only the next node.

The Node class defines the basic structure of a node, which contains a value and a reference to the next node. The LinkedList class defines the operations that can be performed on the linked list. It has a private member variable $head that points to the first node in the list, and a private member variable $tail that points to the last node in the list. It also has a private member variable $size that keeps track of the number of nodes in the list.

The append method adds a new node with the specified value to the end of the list. If the list is empty, the new node becomes both the head and tail of the list. Otherwise, the new node is added after the tail node, and the tail pointer is updated to point to the new node.

The prepend method adds a new node with the specified value to the beginning of the list. If the list is empty, the new node becomes both the head and tail of the list. Otherwise, the new node is added before the current head node, and the head pointer is updated to point to the new node.

The insert method adds a new node with the specified value at the specified position in the list. If the position is invalid (i.e., less than 0 or greater than the size of the list), an exception is thrown. If the position is 0, the prepend method is called. If the position is the size of the list, the append method is called. Otherwise, the method traverses the list to find the node at the specified position, and inserts the new node between the current node and the previous node.

The remove method removes the first node with the specified value from the list. If the list is empty, an exception is thrown. If the node to be removed is the head node, the head pointer is updated to point to the next node. If the node to be removed is the tail node, the tail pointer is updated to point to the previous node. Otherwise, the method traverses the list to find the node to be removed, and updates the next pointer of the previous node to point to the next node.

The get method returns the value of the node at the specified position in the list. If the position is invalid, an exception is thrown. The method traverses the list to find the node at the specified position, and returns its value.

The size method returns the number of nodes in the list.