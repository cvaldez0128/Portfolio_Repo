import React from "react"

export default class JumpingJacks extends React.Component {
    constructor(props) {
        super(props)
        this.state = {jumpCompleted: false, completedJump: 0}
    }
    render() {
        
       
        return (
            <>
                <>
                <h1>JUMPING JACKS ANYONE?</h1>
                <div class="container">
                    <p>JUMPING JACKS: {this.state.completedJump}</p>
                    <button onClick={() => this.setState((prevState, props) => ({
                        jumpCompleted: true,
                        completedJump: prevState.completedJump + 1,
                    }))
                }>JUMP</button>

                <button onClick={() => this.setState((prevState, props) =>({
                    jumpCompleted: false,
                    completedJump: prevState.completedJump = 0,
                }))
                }>RESET</button>
                </div>
                </>
            </>
        )
    }
}